<?php

namespace App\Http\Livewire\Models\Company;

use Auth;
use Livewire\Component;
use App\Domain\Company\Actions\AddRazorPayToCompany;

class Settings extends Component
{
    public      $company;
    public bool $useRazorPay   = false;
    public bool $createSuccess = false;
    public bool $createFail    = false;

    public ?array $input = [
        "use_razorpay"        => null,
        "razorpay_key_id"     => null,
        "razorpay_key_secret" => null,
    ];

    public function AddRazorPay()
    {
        $this->validate();
        $add_razorpay = AddRazorPayToCompany::run($this->company->id, $this->input);

        if ($add_razorpay != false) {
            $this->createSuccess = true;
        } else {
            $this->createFail = true;
        }
    }

    public function mount()
    {
        $this->company                          = Auth::user()->company;
        $this->input['use_razorpay']            = (isset($this->company->use_razorpay)) ? $this->company->use_razorpay : null;
        $this->input['razorpay_key_id']         = (isset($this->company->razorpay_key_id)) ? $this->company->razorpay_key_id : '';
        $this->input['razorpay_key_secret']     = (isset($this->company->razorpay_key_id)) ? $this->company->razorpay_key_secret : '';
        $this->input['razorpay_account_number'] = (isset($this->company->razorpay_account_number)) ? $this->company->razorpay_account_number : '';
    }

    public function render()
    {
        return view('livewire.models.company.settings');
    }

    protected function rules()
    {
        return AddRazorPayToCompany::rules(true, "input.");
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
