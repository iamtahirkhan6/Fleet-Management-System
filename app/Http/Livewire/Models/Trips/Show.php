<?php

namespace App\Http\Livewire\Models\Trips;

use Livewire\Component;
use App\Domain\Project\Models\Project;
use App\Domain\UnloadingPoint\Models\UnloadingPoint;
use App\Domain\LoadingPoint\Models\LoadingPoint;

class Show extends Component
{
    public Trip $trip;

    public function render()
    {
        return view('livewire.models.trips.show');
    }
}
