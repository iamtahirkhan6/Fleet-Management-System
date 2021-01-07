<?php

namespace App\Http\Livewire\Models\Trips;

use App\Models\Trip;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{ 
    use WithPagination;
    public $project;

    public function mount($project)
    {
        $this->project  = $project;
    }

    public function render()
    {
        return view('livewire.models.trips.index', ['trips' => Trip::where('project_id', $this->project->id)->paginate(25)]);
    }
}
