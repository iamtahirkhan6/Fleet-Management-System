<?php

namespace App\Http\Livewire\Models\MarketVehicles;

use Livewire\Component;
use App\Domain\VehicleRC\Models\VehicleRC;

class Show extends Component
{
    public $market_vehicle;
    public $parties;
    public $all_parties;
    public $rc_details;
    public function mount($market_vehicle)
    {
        $this->market_vehicle = $market_vehicle;
        $this->parties = $market_vehicle->party;
        $this->all_parties = $market_vehicle->party()->count();
        $market_vehicle_number = $market_vehicle->number;
        $this->rc_details = VehicleRC::where('number', $market_vehicle->number)->firstOr(function () use($vehicle_number)
        {
            return VehicleRC::create(["number" => $vehicle_number]);
        });
    }

    public function render()
    {
        return view('livewire.models.market-vehicles.show');
    }

}
