<?php

namespace App\Http\Livewire\Models\Consignees;

use App\Helper\Helper;
use Livewire\Component;
use App\Domain\Consignee\Models\Consignee;
use App\Domain\General\Actions\FetchGstDetails;
use App\Domain\Consignee\Actions\UpdateAddressAction;
use App\Domain\Consignee\Actions\UpdateAddressFromGst;

class UpdateAddress extends Component
{
    public Consignee $consignee;
    public array     $address;
    public bool $update_from_gstn = true;

    public function updateAddress()
    {
        $this->validate();
        $result = UpdateAddressAction::core($this->consignee, $this->address);
        if ($result) $this->emit('addressUpdated');
        if (!$result) $this->emit('addressUpdateFailed');
    }

    public function updateAddressFromGstn()
    {
        if(isset($this->consignee->gstn) && strlen($this->consignee->gstn) == 15)
        {
            $gstn_details_model = FetchGstDetails::run($this->consignee->gstn);
            if($gstn_details_model != false)
            {
                UpdateAddressFromGst::run($this->consignee->id, $this->consignee->gstn, $gstn_details_model, $this->consignee);
            }
        } else {
            $this->emit('unableToFetchGstn');
        }
    }

    public function mount()
    {
        if (isset($this->consignee->gstn))
        {
            $this->update_from_gstn = false;
        }
        $this->address             = Helper::setInput($this->rules(), 'address.');
        $this->address['line_1']   = (isset($this->consignee->address->line_1)) ? $this->consignee->address->line_1 : null;
        $this->address['line_2']   = (isset($this->consignee->address->line_2)) ? $this->consignee->address->line_2 : null;
        $this->address['city']     = (isset($this->consignee->address->city)) ? $this->consignee->address->city : null;
        $this->address['district'] = (isset($this->consignee->address->district)) ? $this->consignee->address->district : null;
        $this->address['state']    = (isset($this->consignee->address->state)) ? $this->consignee->address->state : null;
        $this->address['zip']      = (isset($this->consignee->address->zip)) ? $this->consignee->address->zip : null;
    }

    public function render()
    {
        return view('livewire.models.consignees.update-address');
    }

    public function rules() : array
    {
        return UpdateAddressAction::rules('address.');
    }

    public function validationAttributes() : array
    {
        return UpdateAddressAction::validationAttributes('address.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
