<?php

namespace App\Http\Livewire\Models\Vehicles;

use Livewire\Component;
use App\Models\VehicleRC;

class Show extends Component
{
    public $vehicle;
    public $parties;
    public $all_parties;
    public $rc_details;
    public function mount($vehicle)
    {
        $this->vehicle = $vehicle;
        $this->parties = $vehicle->party;
        $this->all_parties = $vehicle->party()->count();
        $vehicle_number = $vehicle->number;
        $this->rc_details = VehicleRC::where('number', $vehicle->number)->firstOr(function () use($vehicle_number) 
        {
            return VehicleRC::create(["number" => $vehicle_number]);
        });
    }

    public function render()
    {
        return view('livewire.models.vehicles.show');
    }
    
}
