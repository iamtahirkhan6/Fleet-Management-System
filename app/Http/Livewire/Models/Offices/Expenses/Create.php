<?php

namespace App\Http\Livewire\Models\Offices\Expenses;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Expense;
use Livewire\WithFileUploads;
use App\Models\ExpenseReceipt;
use App\Models\ExpenseCategory;
use App\Models\ExpenseIndividual;
use App\Models\ExpensePaymentMethod;

class Create extends Component
{
    use WithFileUploads;

    public $office;
    public $expense_categories;
    public $payment_methods;
    public $payment_individuals;

    public $date;
    public $amount;
    public $expense_category;
    public $payment_method;
    public $payee;
    public $remarks;
    public $receipt = [];

    public $showSuccess = false;

    protected $rules = [
        'date' => 'required|date',
        'amount' => 'required|integer',
        'expense_category' => 'required|exists:expense_categories,id',
        'payee' => 'nullable|exists:expense_individuals,id',
        'payment_method' => 'required|exists:expense_payment_methods,id',
        'remarks' => 'required_if:expense_category,9', // 9 is the id of "Others" row
        'receipt' => 'image|mimes:jpg,png,jpeg|max:5120',
    ];

    protected $messages = [
        'amount.required' => 'Amount cannot be empty',
        'amount.integer' => 'Amount must be an integer',
        'expense_category.required' => 'Category cannot be empty, choose Others and fill in the remarks',
        'payment_method.required' => 'Payment Method cannot be empty.',
        'remarks.required_if' => 'Remarks cannot be empty when the category is others.',
        // 'receipt.image' => 'Receipts should be image',
    ];

    // Real Time Validation Support
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function createExpense()
    {
        $this->validate();

        $expense = new Expense();
        $expense->date                      = $this->date;
        $expense->amount                    = $this->amount;
        $expense->expense_category_id       = $this->expense_category;
        $expense->expense_payment_method_id = $this->payment_method;
        $expense->expense_individual_id     = $this->payee;
        $expense->remark                    = $this->remarks;
        $expense->office_id                 = $this->office->id;

        $expense->save();

        foreach ($this->receipt as $photo) {
            $uploaded = str_replace("/public", "", $photo->storePublicly('/public/documents/expenses/offices/'.$this->office->id));
            $er = ExpenseReceipt::insert([
                    'expense_id'    => $expense->id, 
                    'doc_path'      => $uploaded
                ]);
            dd($er->id);
        }

        if($expense->id != null)
        {
            $this->showSuccess = true;
        }
        
    }

    public function mount()
    {
        $this->expense_categories   = ExpenseCategory::all();
        $this->payment_methods      = ExpensePaymentMethod::all();
        $this->payment_individuals  = ExpenseIndividual::where('company_id', $this->office->company->id)->get();
        $this->date                 = Carbon::today()->format('d-m-Y');
    }

    public function render()
    {
        return view('livewire.models.offices.expenses.create', ["office" => $this->office]);
    }
}