<?php

namespace App\Http\Livewire\Models\Consignees;

use Livewire\Component;
use App\Domain\Consignee\Models\Consignee;
use App\Domain\Consignee\Actions\UpdateNameAction;

class UpdateName extends Component
{
    public Consignee $consignee;

    public function updateDetails()
    {
        $this->validate();
        $saved = $this->consignee->save();

        if ($saved) {
            $this->emit('detailsUpdated');
        } else {
            $this->emit('detailsUpdateFailed');
        }
    }

    public function render()
    {
        return view('livewire.models.consignees.update-name');
    }

    public function rules()
    {
        return UpdateNameAction::rules('consignee.');
    }

    public function validationAttributes()
    {
        return UpdateNameAction::validationAttributes('consignee.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
