<?php

namespace App\Http\Livewire\Models\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.models.projects.index',[
            'projects' => Project::paginate(15)
        ]);
    }
}
