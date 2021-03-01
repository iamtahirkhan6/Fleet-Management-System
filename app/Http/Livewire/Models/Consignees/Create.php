<?php

namespace App\Http\Livewire\Models\Consignees;

use App\Helper\Helper;
use Livewire\Component;
use App\Domain\Consignee\Actions\CreateConsignee;

class Create extends Component
{
    public array $input         = [];
    public bool  $createSuccess = false;
    public bool  $createFail    = false;
    public bool  $addressAdd    = false;

    public function createConsignee()
    {
        $this->validate();
        $consignee = CreateConsignee::run($this->input);

        $this->createSuccess = ($consignee);
        $this->createFail    = ($consignee == false) ? true : false;
    }

    public function mount()
    {
        $this->feedInput();
    }

    public function render()
    {
        $this->input["address_bool"] = $this->addressAdd;

        return view('livewire.models.consignees.create');
    }

    public function feedInput()
    {
        $this->input = Helper::setInput($this->rules(), 'input.');
    }

    public function rules() : array
    {
        return CreateConsignee::rules('input.');
    }

    public function validationAttributes() : array
    {
        return CreateConsignee::validationAttributes('input.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
