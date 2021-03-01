<?php

namespace App\Http\Livewire\Models\Fleets\Vehicles;

use Livewire\Component;
use App\Domain\Fleet\Models\Fleet;
use App\Domain\Fleet\Models\FleetVehicle;
use App\Domain\VehicleRC\Actions\SearchVehicleAndCreate;
use App\Domain\Fleet\Actions\CopyVehicleRcToFleetVehicle;

class Create extends Component
{
    public Fleet        $fleet;
    public FleetVehicle $fleetvehicle;

    public bool $createSuccess = false;
    public bool $createFail    = false;

    protected array $rules = [
        'fleetvehicle.license_plate' => 'required',
    ];

    protected array $validationAttributes = [
        'fleet.license_plate' => 'license plate',
    ];

    public function createFleetVehicle()
    {
        $this->validate();
        $vehicle_rc = SearchVehicleAndCreate::findVehicleInfo($this->fleetvehicle->license_plate);
        CopyVehicleRcToFleetVehicle::run($vehicle_rc, $this->fleetvehicle, $this->fleet->id);

        $this->fleetvehicle->save();

        $this->createSuccess = !is_null($this->fleet->id);
        $this->createFail    = is_null($this->fleet->id);
    }

    public function mount()
    {
        $this->fleetvehicle = new FleetVehicle();
    }

    public function render()
    {
        return view('livewire.models.fleets.vehicles.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
