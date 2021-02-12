<?php

namespace Illuminate\Testing;

use Mockery\MockInterface;
use Illuminate\Console\OutputStyle;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Arr;
use Mockery;
use Mockery\Exception\NoMatchingExpectationException;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

class PendingCommand
{
    /**
     * The test being run.
     *
     * @var TestCase
     */
    public $test;

    /**
     * The application instance.
     *
     * @var Container
     */
    protected $app;

    /**
     * The command to run.
     *
     * @var string
     */
    protected $command;

    /**
     * The parameters to pass to the command.
     *
     * @var array
     */
    protected $parameters;

    /**
     * The expected exit code.
     *
     * @var int
     */
    protected $expectedExitCode;

    /**
     * Determine if the command has executed.
     *
     * @var bool
     */
    protected $hasExecuted = false;

    /**
     * Create a new pending console command run.
     *
     * @param  PHPUnitTestCase  $test
     * @param  Container        $app
     * @param  string           $command
     * @param  array            $parameters
     *
     * @return void
     */
    public function __construct(PHPUnitTestCase $test, Container $app, $command, $parameters)
    {
        $this->app = $app;
        $this->test = $test;
        $this->command = $command;
        $this->parameters = $parameters;
    }

    /**
     * Specify an expected question that will be asked when the command runs.
     *
     * @param  string  $question
     * @param  string|bool  $answer
     * @return $this
     */
    public function expectsQuestion($question, $answer)
    {
        $this->test->expectedQuestions[] = [$question, $answer];

        return $this;
    }

    /**
     * Specify an expected confirmation question that will be asked when the command runs.
     *
     * @param  string  $question
     * @param  string  $answer
     * @return $this
     */
    public function expectsConfirmation($question, $answer = 'no')
    {
        return $this->expectsQuestion($question, strtolower($answer) === 'yes');
    }

    /**
     * Specify an expected choice question with expected answers that will be asked/shown when the command runs.
     *
     * @param  string  $question
     * @param  string|array  $answer
     * @param  array  $answers
     * @param  bool  $strict
     * @return $this
     */
    public function expectsChoice($question, $answer, $answers, $strict = false)
    {
        $this->test->expectedChoices[$question] = [
            'expected' => $answers,
            'strict' => $strict,
        ];

        return $this->expectsQuestion($question, $answer);
    }

    /**
     * Specify output that should be printed when the command runs.
     *
     * @param  string  $output
     * @return $this
     */
    public function expectsOutput($output)
    {
        $this->test->expectedOutput[] = $output;

        return $this;
    }

    /**
     * Specify output that should never be printed when the command runs.
     *
     * @param  string  $output
     * @return $this
     */
    public function doesntExpectOutput($output)
    {
        $this->test->unexpectedOutput[$output] = false;

        return $this;
    }

    /**
     * Specify a table that should be printed when the command runs.
     *
     * @param  array            $headers
     * @param  Arrayable|array  $rows
     * @param  string           $tableStyle
     * @param  array            $columnStyles
     * @return $this
     */
    public function expectsTable($headers, $rows, $tableStyle = 'default', array $columnStyles = [])
    {
        $table = (new Table($output = new BufferedOutput))
            ->setHeaders((array) $headers)
            ->setRows($rows instanceof Arrayable ? $rows->toArray() : $rows)
            ->setStyle($tableStyle);

        foreach ($columnStyles as $columnIndex => $columnStyle) {
            $table->setColumnStyle($columnIndex, $columnStyle);
        }

        $table->render();

        $lines = array_filter(
            explode(PHP_EOL, $output->fetch())
        );

        foreach ($lines as $line) {
            $this->expectsOutput($line);
        }

        return $this;
    }

    /**
     * Assert that the command has the given exit code.
     *
     * @param  int  $exitCode
     * @return $this
     */
    public function assertExitCode($exitCode)
    {
        $this->expectedExitCode = $exitCode;

        return $this;
    }

    /**
     * Execute the command.
     *
     * @return int
     */
    public function execute()
    {
        return $this->run();
    }

    /**
     * Execute the command.
     *
     * @return int
     *
     * @throws NoMatchingExpectationException
     */
    public function run()
    {
        $this->hasExecuted = true;

        $mock = $this->mockConsoleOutput();

        try {
            $exitCode = $this->app->make(Kernel::class)->call($this->command, $this->parameters, $mock);
        } catch (NoMatchingExpectationException $e) {
            if ($e->getMethodName() === 'askQuestion') {
                $this->test->fail('Unexpected question "'.$e->getActualArguments()[0]->getQuestion().'" was asked.');
            }

            throw $e;
        }

        if ($this->expectedExitCode !== null) {
            $this->test->assertEquals(
                $this->expectedExitCode, $exitCode,
                "Expected status code {$this->expectedExitCode} but received {$exitCode}."
            );
        }

        $this->verifyExpectations();
        $this->flushExpectations();

        return $exitCode;
    }

    /**
     * Determine if expected questions / choices / outputs are fulfilled.
     *
     * @return void
     */
    protected function verifyExpectations()
    {
        if (count($this->test->expectedQuestions)) {
            $this->test->fail('Question "'.Arr::first($this->test->expectedQuestions)[0].'" was not asked.');
        }

        if (count($this->test->expectedChoices) > 0) {
            foreach ($this->test->expectedChoices as $question => $answers) {
                $assertion = $answers['strict'] ? 'assertEquals' : 'assertEqualsCanonicalizing';

                $this->test->{$assertion}(
                    $answers['expected'],
                    $answers['actual'],
                    'Question "'.$question.'" has different options.'
                );
            }
        }

        if (count($this->test->expectedOutput)) {
            $this->test->fail('Output "'.Arr::first($this->test->expectedOutput).'" was not printed.');
        }

        if ($output = array_search(true, $this->test->unexpectedOutput)) {
            $this->test->fail('Output "'.$output.'" was printed.');
        }
    }

    /**
     * Mock the application's console output.
     *
     * @return MockInterface
     */
    protected function mockConsoleOutput()
    {
        $mock = Mockery::mock(OutputStyle::class.'[askQuestion]', [
            (new ArrayInput($this->parameters)), $this->createABufferedOutputMock(),
        ]);

        foreach ($this->test->expectedQuestions as $i => $question) {
            $mock->shouldReceive('askQuestion')
                ->once()
                ->ordered()
                ->with(Mockery::on(function ($argument) use ($question) {
                    if (isset($this->test->expectedChoices[$question[0]])) {
                        $this->test->expectedChoices[$question[0]]['actual'] = $argument->getAutocompleterValues();
                    }

                    return $argument->getQuestion() == $question[0];
                }))
                ->andReturnUsing(function () use ($question, $i) {
                    unset($this->test->expectedQuestions[$i]);

                    return $question[1];
                });
        }

        $this->app->bind(OutputStyle::class, function () use ($mock) {
            return $mock;
        });

        return $mock;
    }

    /**
     * Create a mock for the buffered output.
     *
     * @return MockInterface
     */
    private function createABufferedOutputMock()
    {
        $mock = Mockery::mock(BufferedOutput::class.'[doWrite]')
                ->shouldAllowMockingProtectedMethods()
                ->shouldIgnoreMissing();

        foreach ($this->test->expectedOutput as $i => $output) {
            $mock->shouldReceive('doWrite')
                ->once()
                ->ordered()
                ->with($output, Mockery::any())
                ->andReturnUsing(function () use ($i) {
                    unset($this->test->expectedOutput[$i]);
                });
        }

        foreach ($this->test->unexpectedOutput as $output => $displayed) {
            $mock->shouldReceive('doWrite')
                ->once()
                ->ordered()
                ->with($output, Mockery::any())
                ->andReturnUsing(function () use ($output) {
                    $this->test->unexpectedOutput[$output] = true;
                });
        }

        return $mock;
    }

    /**
     * Flush the expectations from the test case.
     *
     * @return void
     */
    protected function flushExpectations()
    {
        $this->test->expectedOutput = [];
        $this->test->unexpectedOutput = [];
        $this->test->expectedTables = [];
        $this->test->expectedQuestions = [];
        $this->test->expectedChoices = [];
    }

    /**
     * Handle the object's destruction.
     *
     * @return void
     */
    public function __destruct()
    {
        if ($this->hasExecuted) {
            return;
        }

        $this->run();
    }
}
