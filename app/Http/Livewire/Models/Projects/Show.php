<?php

namespace App\Http\Livewire\Models\Projects;

use Livewire\Component;
use App\Models\Trip;

class Show extends Component
{

    public $project;
    public $trips;
    public $transport_volume;

    public function mount($project)
    {
        $this->project = $project;
        $this->trips = Trip::where('project_id', $project->id)->count();
        $this->transport_volume = Trip::where('project_id', $project->id)->sum('net_weight');
        $this->work_done_for = Trip::where('project_id', $project->id)->sum('net_weight');
    }

    public function render()
    {
        return view('livewire.models.projects.show');
    }
}
