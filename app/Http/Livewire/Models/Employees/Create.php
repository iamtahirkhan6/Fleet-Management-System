<?php

namespace App\Http\Livewire\Models\Employees;

use Auth;
use App\Helper\Helper;
use Livewire\Component;
use App\Domain\Office\Models\Office;
use Illuminate\Database\Eloquent\Collection;
use App\Domain\Employee\Actions\CreateEmployee;
use App\Domain\Employee\Models\EmployeesDesignation;

class Create extends Component
{
    public Collection $offices;
    public Collection $designations;

    public array $input         = [];
    public bool  $createSuccess = false;
    public bool  $createFail    = false;
    public bool  $bankBool      = false;

    public function createEmployee()
    {
        $this->validate();
        $this->input["bank_bool"] = $this->bankBool;
        $employee                 = CreateEmployee::run($this->input);

        if ($employee != false) {
            $this->createSuccess = true;
        } else {
            $this->createFail = true;
        }
    }

    public function mount()
    {
        $this->feedInput();
        $this->offices             = Office::get([
            'id',
            'name',
        ]);
        $this->designations        = EmployeesDesignation::get([
            'id',
            'name',
        ]);
    }

    public function render()
    {
        return view('livewire.models.employees.create');
    }

    public function feedInput()
    {
        $this->input = Helper::setInput($this->rules());
    }

    public function rules() : array
    {
        return CreateEmployee::rules("input.");
    }

    public function validationAttributes() : array
    {
        return CreateEmployee::validationAttributes("input.");
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
