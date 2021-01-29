<?php

namespace App\Http\Livewire\Models\Trips;

use App\Domain\Trip\Models\Trip;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $project;
    use WithPagination;

    public function mount($project)
    {
        $this->project  = $project;
    }

    public function render()
    {
        return view('livewire.models.trips.index', ['trips' => Trip::where('project_id', $this->project->id)->paginate(25)]);
    }
}
