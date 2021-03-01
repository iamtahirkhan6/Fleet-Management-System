<?php

namespace App\Http\Livewire\Models\Offices;

use Livewire\Component;
use App\Domain\Office\Models\Office;
use Illuminate\Database\QueryException;

class Create extends Component
{
    public Office $office;

    public bool $createSuccess = false;
    public bool $createFail    = false;

    protected array $rules = [
        'office.name'       => 'required',
    ];

    protected array $validationAttributes = [
        'office.name'       => 'loading point',
    ];

    public function createOffice()
    {
        $this->validate();

        try {
            $this->office->save();
        } catch (QueryException $ex) {
            $this->createFail = true;
        }

        $this->createSuccess = true;
    }

    public function mount()
    {
        $this->office = new Office();
    }

    public function render()
    {
        return view('livewire.models.offices.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
