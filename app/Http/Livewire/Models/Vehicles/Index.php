<?php

namespace App\Http\Livewire\Models\Vehicles;

use App\Models\Vehicle;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $searchTerm;
    public $perPage = 15;
    
    public function render()
    {
        return view('livewire.models.vehicles.index',[
            'vehicles' => Vehicle::where('number','like', '%'.$this->searchTerm.'%')->latest()->paginate($this->perPage)
        ]);
    }
}
