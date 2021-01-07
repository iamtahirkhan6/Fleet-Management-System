<?php

namespace App\Http\Livewire\Models\Parties\Trips;

use App\Models\Trip;
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
        return view('livewire.models.parties.trips.index', ['trips' => Trip::where('party_id', $this->party->id)->paginate(25)]);
    }
}
