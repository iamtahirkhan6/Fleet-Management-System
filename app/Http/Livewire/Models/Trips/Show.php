<?php

namespace App\Http\Livewire\Models\Trips;

use Livewire\Component;
use App\Domain\Project\Models\Project;
use App\Domain\UnloadingPoint\Models\UnloadingPoint;
use App\Domain\LoadingPoint\Models\LoadingPoint;

class Show extends Component
{
    public $trip;
    public $source;
    public $destination;
    public function mount($trip)
    {
        $this->trip = $trip;
        $project = Project::where('id', $trip->project_id)->first();
        $this->source = LoadingPoint::where('id', $project->source_id)->first()->name;
        $this->destination = Destination::where('id', $project->destination_id)->first()->name;
    }

    public function render()
    {
        return view('livewire.models.trips.show');
    }
}
