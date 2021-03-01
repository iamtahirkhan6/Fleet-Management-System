<?php

namespace App\Http\Livewire\Models\Projects;

use Livewire\Component;
use Livewire\WithPagination;
use App\Domain\Project\Models\Project;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.models.projects.index',[
                'projects' => Project::orderByDesc('id')->paginate(15)
                ]);
    }
}
