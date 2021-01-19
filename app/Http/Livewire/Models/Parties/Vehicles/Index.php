<?php

namespace App\Http\Livewire\Models\Parties\Vehicles;

use App\Models\MarketVehicle;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $party;

    public function mount($party)
    {
        $this->party = $party;
    }
    public function render()
    {
        return view('livewire.models.parties.vehicles.index', ['market_vehicles' => MarketVehicle::where('party_id', $this->party->id)->with(['party'])->paginate(25)]);
    }
}
