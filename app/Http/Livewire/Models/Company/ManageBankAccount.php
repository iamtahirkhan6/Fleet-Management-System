<?php

namespace App\Http\Livewire\Models\Company;

use App\Helper\Helper;
use Livewire\Component;
use App\Domain\Company\Actions\AddOrUpdateBankAccount;

class ManageBankAccount extends Component
{
    public       $company;
    public array $bank_account_input;

    public function AddOrUpdateBankAccount()
    {
        $this->validate();
        $result = AddOrUpdateBankAccount::core($this->company->id, $this->bank_account_input, $this->company);
        if ($result == true) $this->emit('bankAccountActionSuccess');
        if ($result == false) $this->emit('bankAccountActionFail');
    }

    public function mount()
    {
        $this->company                              = auth()->user()->company;
        $this->bank_account_input                   = Helper::setInput($this->rules(), 'bank_account.');
        $this->bank_account_input['account_name']   = (isset($this->company->bankAccount->account_name)) ? $this->company->bankAccount->account_name : null;
        $this->bank_account_input['account_number'] = (isset($this->company->bankAccount->account_number)) ? $this->company->bankAccount->account_number : null;
        $this->bank_account_input['ifsc_code']      = (isset($this->company->bankAccount->ifsc_code)) ? $this->company->bankAccount->ifsc_code : null;
    }

    public function render()
    {
        return view('livewire.models.company.manage-bank-account');
    }

    public function rules() : array
    {
        return AddOrUpdateBankAccount::rules('bank_account_input.');
    }

    public function validationAttributes() : array
    {
        return AddOrUpdateBankAccount::validationAttributes('bank_account_input.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
