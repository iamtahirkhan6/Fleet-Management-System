<?php

namespace App\Http\Livewire\Models\Consignees;

use App\Helper\Helper;
use Livewire\Component;
use App\Domain\Consignee\Models\Consignee;
use App\Domain\Consignee\Actions\UpdateTaxDetailsAction;

class UpdateTaxDetails extends Component
{
    public Consignee $consignee;
    public array     $tax_details;

    public function updateTaxDetails()
    {
        $this->validate();
        $result = UpdateTaxDetailsAction::core($this->consignee->id, $this->tax_details);
        if ($result) $this->emit('taxDetailsUpdated');
        if (!$result) $this->emit('taxDetailsUpdateFailed');
    }

    public function mount()
    {
        $this->tax_details         = Helper::setInput($this->rules(), 'tax_details.');
        $this->tax_details["gstn"] = (isset($this->consignee->gstn)) ? $this->consignee->gstn : null;
        $this->tax_details["pan"]  = (isset($this->consignee->pan)) ? $this->consignee->pan : null;
    }

    public function render()
    {
        return view('livewire.models.consignees.update-tax-details');
    }

    public function rules() : array
    {
        return UpdateTaxDetailsAction::rules('tax_details.');
    }

    public function validationAttributes() : array
    {
        return UpdateTaxDetailsAction::validationAttributes('tax_details.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
