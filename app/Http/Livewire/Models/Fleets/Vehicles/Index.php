<?php

namespace App\Http\Livewire\Models\Fleets\Vehicles;

use App\Models\FleetVehicle;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $fleet;
    public $perPage = 10;
    public function render()
    {
        return view('livewire.models.fleets.vehicles.index', ['vehicles' => FleetVehicle::where('fleet_id', $this->fleet->id)->paginate($this->perPage)]);
    }
}
