<?php

namespace Illuminate\Support\Facades;

use Closure;
use DateInterval;
use DateTimeInterface;
use Illuminate\Mail\Mailer;
use Illuminate\Mail\PendingMail;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Testing\Fakes\MailFake;

/**
 * @method static Mailer mailer(string|null $name = null)
 * @method static PendingMail bcc($users)
 * @method static PendingMail to($users)
 * @method static Collection queued(string $mailable, Closure|string $callback = null)
 * @method static Collection sent(string $mailable, Closure|string $callback = null)
 * @method static array failures()
 * @method static bool hasQueued(string $mailable)
 * @method static bool hasSent(string $mailable)
 * @method static mixed later(DateTimeInterface|DateInterval|int $delay, Mailable|string|array $view, string $queue = null)
 * @method static mixed laterOn(string $queue, DateTimeInterface|DateInterval|int $delay, Mailable|string|array $view)
 * @method static mixed queue(Mailable|string|array $view, string $queue = null)
 * @method static mixed queueOn(string $queue, Mailable|string|array $view)
 * @method static void assertNotQueued(string $mailable, callable $callback = null)
 * @method static void assertNotSent(string $mailable, callable|int $callback = null)
 * @method static void assertNothingQueued()
 * @method static void assertNothingSent()
 * @method static void assertQueued(string|Closure $mailable, callable|int $callback = null)
 * @method static void assertSent(string|Closure $mailable, callable|int $callback = null)
 * @method static void raw(string $text, $callback)
 * @method static void plain(string $view, array $data, $callback)
 * @method static void html(string $html, $callback)
 * @method static void send(Mailable|string|array $view, array $data = [], Closure|string $callback = null)
 *
 * @see \Illuminate\Mail\Mailer
 * @see \Illuminate\Support\Testing\Fakes\MailFake
 */
class Mail extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return MailFake
     */
    public static function fake()
    {
        static::swap($fake = new MailFake);

        return $fake;
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mail.manager';
    }
}
