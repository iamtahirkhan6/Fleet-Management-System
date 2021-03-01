<?php

namespace App\Http\Livewire\Models\RcSearch;

use Livewire\Component;
use App\Domain\VehicleRC\Actions\SearchVehicleAndCreate;

class Index extends Component
{
    public      $vehicle;
    public      $license_plate;
    public bool $showVehicleInfo;

    public function findVehicleInfo()
    {
        $this->validate();
        $this->vehicle = SearchVehicleAndCreate::findVehicleInfo($this->license_plate);
        $this->showVehicleInfo = !is_null($this->vehicle);
    }

    public function render()
    {
        return view('livewire.models.rc-search.index');
    }

    public function rules() : array
    {
        return SearchVehicleAndCreate::rules();
    }

    public function validationAttributes() : array
    {
        return SearchVehicleAndCreate::validationAttributes();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
