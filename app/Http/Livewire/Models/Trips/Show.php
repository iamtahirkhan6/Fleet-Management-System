<?php

namespace App\Http\Livewire\Models\Trips;

use App\Models\Mine;
use App\Domain\Project\Models\Project;
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
        $this->source = Mine::where('id', $project->mine_id)->first()->name;
        $this->destination = UnloadingPoint::where('id', $project->unloading_point_id)->first()->name;
    }

    public function render()
    {
        return view('livewire.models.trips.show');
    }
}
