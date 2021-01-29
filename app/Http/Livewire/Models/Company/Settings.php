<?php

namespace App\Http\Livewire\Models\Company;

use Auth;
use Livewire\Component;
use App\Domain\Company\Actions\AddRazorPayToCompany;

class Settings extends Component
{
    public $company;
    public bool $createSuccess = false;
    public bool $createFail = false;

    public ?array $input = ["use_razorpay" => null, "razorpay_key_id" => null, "razorpay_key_secret" => null];

    protected function rules()
    {
        return AddRazorPayToCompany::rules(True, "input.");
    }
    public function AddRazorPay()
    {
        $this->validate();
        $add_razorpay = AddRazorPayToCompany::run($this->company->id, $this->input);

        if($add_razorpay != false)
        {
            $this->createSuccess = true;
        } else {
            $this->createFail = true;
        }
    }

    public function mount()
    {
        $this->company = Auth::user()->company;
    }

    public function render()
    {
        return view('livewire.models.company.settings');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
