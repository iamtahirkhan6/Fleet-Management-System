<?php

namespace App\Http\Livewire\Models\Trips;

use Livewire\Component;
use Livewire\WithPagination;
use App\Domain\Trip\Models\Trip;
use App\Domain\Project\Models\Project;

class Index extends Component
{
    public Project $project;

    use WithPagination;

    public function render()
    {
        return view('livewire.models.trips.index', [ 'trips' => Trip::where('project_id', $this->project->id)->orderBy('date', 'desc')->paginate(25) ]);
    }
}
