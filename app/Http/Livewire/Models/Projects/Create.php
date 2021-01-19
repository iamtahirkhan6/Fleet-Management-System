<?php

namespace App\Http\Livewire\Models\Projects;

use App\Models\Mine;
use App\Domain\Project\Models\Project;
use App\Domain\Company\Models\Company;
use App\Models\Material;
use App\Models\Consignee;
use App\Models\UnloadingPoint;

use Livewire\Component;

class Create extends Component
{
    public $sources;
    public $destinations;
    public $materials;
    public $consignees;
    public $companies;

    public Project $project;

    public $createSuccess = false;
    public $createFail = false;

    protected $rules = [
        'project.material'      => 'required',
        'project.consignee'     => 'required',
        'project.source'        => 'required',
        'project.destination'   => 'required',
        'project.company_id'       => 'required',
    ];

    protected $messages = [
        'project.material.required'     => 'The material cannot be empty.',
        'project.consignee.required'    => 'The Consignee cannot be empty.',
        'project.source.required'       => 'The Source cannot be empty.',
        'project.destination.required'  => 'The Destination Address cannot be empty.',
        'project.company_id.required'   => 'The Company cannot be empty.',
    ];

    public function createProject()
    {
        $this->validate();

        $this->project->status = 1;

        try{
            $this->project->save();
        } catch(\Illuminate\Database\QueryException $ex)
        {
            $this->createFail = true;
        }

        $this->createSuccess = true;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        $this->project      = new Project();
        $this->sources      = Mine::all();
        $this->destinations = UnloadingPoint::all();
        $this->materials    = Material::all();
        $this->consignees   = Consignee::all();
        $this->companies    = Company::all();
    }

    public function render()
    {
        return view('livewire.models.projects.create');
    }
}
