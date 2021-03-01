<?php

namespace App\Http\Livewire\Models\Expenses;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Domain\Payee\Models\Payee;
use App\Domain\Office\Models\Office;
use App\Domain\Expense\Models\Expense;
use App\Domain\Payment\Models\PaymentMethod;
use App\Domain\Expense\Models\ExpenseCategory;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class Create extends Component
{
    public Office  $office;
    public Expense $expense;
    public         $payees;
    public         $payment_methods;
    public         $expense_categories;

    public bool $showSuccess = false;
    public bool $showFail    = false;

    //////////////////////////// Spatie Media Library
    public array $mediaComponentNames = ['receipts'];
    public       $receipts;
    /////////////////////////// Spatie Media Library

    protected array $rules = [
        'expense.date'                => 'required|date',
        'expense.amount'              => 'required|numeric|min:1',
        'expense.expense_category_id' => 'required|exists:expense_categories,id',
        'expense.payee_id'            => 'nullable|exists:payees,id',
        'expense.payment_method_id'   => 'required|exists:payment_methods,id',
        'expense.remark'              => 'required_if:expense_category,9',         // 9 is the id of "Others" row
    ];

    protected array $validationAttributes = [
        'expense.date'             => 'date',
        'expense.amount'           => 'amount',
        'expense.expense_category' => 'expense category',
        'expense.payee_id'         => 'payee',
        'expense.payment_method'   => 'payment method',
        'expense.remark'           => 'remark',
    ];

    public function createExpense()
    {
        $this->validate();
        $this->expense->office_id = $this->office->id;
        $this->expense->save();

        if (!is_null($this->expense->id)) {
            $this->expense
                ->addFromMediaLibraryRequest($this->receipts)
                ->toMediaCollection('expenses');
        }

        $this->showSuccess = !is_null($this->expense->id);
        $this->showFail    = is_null($this->expense->id);
    }

    public function mount()
    {
        $this->expense            = new Expense();
        $this->expense->date      = Carbon::today()
            ->format('d-m-Y');
        $this->expense_categories = ExpenseCategory::all('id', 'name');
        $this->payment_methods    = PaymentMethod::all('id', 'name');
        $this->payees             = Payee::whereCompanyId($this->office->company->id)
            ->get(['id', 'name']);
    }

    public function render()
    {
        return view('livewire.models.expenses.create', ["office" => $this->office]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
