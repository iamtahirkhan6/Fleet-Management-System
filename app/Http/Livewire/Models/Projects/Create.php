<?php

namespace App\Http\Livewire\Models\Projects;

use Livewire\Component;
use App\Domain\Project\Models\Project;
use App\Domain\General\Models\Material;
use Illuminate\Database\QueryException;
use App\Domain\Consignee\Models\Consignee;
use App\Domain\Project\Actions\CreateProject;
use App\Domain\LoadingPoint\Models\LoadingPoint;
use App\Domain\UnloadingPoint\Models\UnloadingPoint;

class Create extends Component
{
    public Project $project;

    public $materials;
    public $consignees;
    public $loading_points;
    public $unloading_points;

    public $createSuccess = false;
    public $createFail    = false;

    public function createProject()
    {
        $this->validate();
        $this->project->name = LoadingPoint::find($this->project->loading_point_id, 'short_code')->short_code."/".UnloadingPoint::find($this->project->unloading_point_id, 'short_code')->short_code."/".Consignee::find($this->project->consignee_id,'short_code')->short_code;
        $this->project->status = 1;

        try {
            $this->project->save();
        } catch (QueryException $ex) {
            $this->createFail = true;
        }

        $this->createSuccess = true;
    }

    public function mount()
    {
        $this->project          = new Project();
        $this->loading_points   = LoadingPoint::all('id', 'name');
        $this->unloading_points = UnloadingPoint::all('id', 'name');
        $this->materials        = Material::all('id', 'name');
        $this->consignees       = Consignee::all('id', 'name');
    }

    public function render()
    {
        return view('livewire.models.projects.create');
    }

    public function rules() : array
    {
        return CreateProject::rules('project.');
    }

    public function validationAttributes() : array
    {
        return CreateProject::validationAttributes('project.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
