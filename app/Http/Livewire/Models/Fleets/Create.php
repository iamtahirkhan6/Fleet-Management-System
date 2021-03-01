<?php

namespace App\Http\Livewire\Models\Fleets;

use Livewire\Component;
use App\Domain\Fleet\Models\Fleet;

class Create extends Component
{
    public Fleet $fleet;

    public bool $createSuccess = false;
    public bool $createFail    = false;

    protected array $rules = [
        'fleet.name' => 'required',
    ];

    protected array $validationAttributes = [
        'fleet.name' => 'fleet name',
    ];

    public function createFleet()
    {
        $this->validate();
        $this->fleet->save();

        $this->createSuccess = !is_null($this->fleet->id);
        $this->createFail    = is_null($this->fleet->id);
    }

    public function mount()
    {
        $this->fleet = new Fleet();
    }

    public function render()
    {
        return view('livewire.models.fleets.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
