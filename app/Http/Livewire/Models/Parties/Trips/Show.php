<?php

namespace App\Http\Livewire\Models\Parties\Trips;

use Livewire\Component;

class Show extends Component
{
    public $trip;
    public $party;

    public function mount($party, $trip)
    {
        $this->party = $party;
        $this->trip = $trip;
    }

    public function render()
    {
        return view('livewire.models.parties.trips.show');
    }
}
