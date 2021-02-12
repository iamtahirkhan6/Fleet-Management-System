<?php

namespace App\Http\Livewire\Models\Projects;

use Livewire\Component;
use App\Domain\Trip\Models\Trip;
use App\Domain\Project\Models\Project;

class Show extends Component
{
    public Project $project;

    public function render()
    {
        return view('livewire.models.projects.show');
    }
}
