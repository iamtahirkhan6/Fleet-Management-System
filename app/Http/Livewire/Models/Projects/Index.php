<?php

namespace App\Http\Livewire\Models\Projects;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use App\Domain\Project\Models\Project;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        if (Auth::user()->hasRole('admin'))
        {
            return view('livewire.models.projects.index',[
                'projects' => Project::orderByDesc('id')->with(['Source', 'Destination', 'Consignee', 'Material', 'Company'])->paginate(15)
            ]);
        } else {
            return view('livewire.models.projects.index',[
                'projects' => Project::whereCompanyId(Auth::user()->company_id)->orderByDesc('id')->with(['Source', 'Destination', 'Consignee', 'Material', 'Company'])->paginate(15)
            ]);
        }
    }
}
