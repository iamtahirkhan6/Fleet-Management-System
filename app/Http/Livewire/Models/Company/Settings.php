<?php

namespace App\Http\Livewire\Models\Company;

use Livewire\Component;
use App\Domain\Company\Models\Company;
use App\Domain\Company\Actions\AddRazorPayToCompany;

class Settings extends Component
{
    public Company $company;
    public ?string $use_razorpay = null;
    public ?string $razorpay_key_id = null;
    public ?string $razorpay_key_secret = null;

    public bool $createSuccess = false;
    public bool $createFail = false;

    protected function rules()
    {
        return AddRazorPayToCompany::rules();
    }
    public function AddRazorPay()
    {
        $this->validate();
        $add_razorpay = AddRazorPayToCompany::run($this->company->id, [
            "use_razorpay"    => $this->use_razorpay,
            "razorpay_key_id" => $this->razorpay_key_id,
            "razorpay_key_secret" => $this->razorpay_key_secret
        ]);

        if($add_razorpay != false)
        {
            $this->createSuccess = true;
        } else {
            $this->createFail = true;
        }
    }

    public function mount($company)
    {
        $this->company = $company;
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
