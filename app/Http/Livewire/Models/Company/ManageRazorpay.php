<?php

namespace App\Http\Livewire\Models\Company;

use Auth;
use App\Helper\Helper;
use Livewire\Component;
use App\Domain\Company\Actions\AddOrUpdateRazorPayToCompany;

class ManageRazorpay extends Component
{
    public       $company;
    public array $razorpay_input;
    public array $enable_razorpay_bool = ["0" => "No", "1" => "Yes"];

    public function AddOrUpdateRazorPayToCompany()
    {
        $this->validate();
        $add_razorpay = AddOrUpdateRazorPayToCompany::core($this->company->id, $this->razorpay_input);
        if ($add_razorpay == true) {
            $this->emit('razorpaySuccess');
        }
        if ($add_razorpay == false) {
            $this->emit('razorpayFailed');
        }
    }

    public function mount()
    {
        $this->company                                   = Auth::user()->company;
        $this->razorpay_input                            = Helper::setInput($this->rules(), 'razorpay_input.');
        $this->razorpay_input['use_razorpay']            = (isset($this->company->use_razorpay)) ? $this->company->use_razorpay : 0;
        $this->razorpay_input['razorpay_key_id']         = (isset($this->company->razorpay_key_id)) ? $this->company->razorpay_key_id : null;
        $this->razorpay_input['razorpay_key_secret']     = (isset($this->company->razorpay_key_id)) ? $this->company->razorpay_key_secret : null;
        $this->razorpay_input['razorpay_account_number'] = (isset($this->company->razorpay_account_number)) ? $this->company->razorpay_account_number : null;
    }

    public function render()
    {
        return view('livewire.models.company.manage-razorpay');
    }

    protected function rules()
    {
        return AddOrUpdateRazorPayToCompany::rules('razorpay_input.');
    }

    protected function validationAttributes()
    {
        return AddOrUpdateRazorPayToCompany::validationAttributes('razorpay_input.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
