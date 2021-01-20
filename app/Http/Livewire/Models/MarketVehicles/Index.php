<?php

namespace App\Http\Livewire\Models\MarketVehicles;

use App\Domain\MarketVehicle\Models\MarketVehicle;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $searchTerm;
    public $perPage = 15;

    public function render()
    {
        return view('livewire.models.market-vehicles.index',[
            'market_vehicles' => MarketVehicle::whereCompanyId(Auth::user()->company_id)->where('number','like', '%'.$this->searchTerm.'%')->with('party')->latest()->paginate($this->perPage)
        ]);
    }
}
