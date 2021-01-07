<?php

namespace App\Http\Livewire\Models\Trips;

use App\Models\Mine;
use App\Models\Project;
use App\Models\UnloadingPoint;
use Livewire\Component;

class Show extends Component
{
    public $trip;
    public $source;
    public $destination;
    public function mount($trip)
    {
        $this->trip = $trip;
        $project = Project::where('id', $trip->project_id)->first();
        $this->source = Mine::where('id', $project->source)->first()->name;
        $this->destination = UnloadingPoint::where('id', $project->destination)->first()->name;
    }

    public function render()
    {
        return view('livewire.models.trips.show');
    }
}
