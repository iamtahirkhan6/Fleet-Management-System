<?php

namespace App\Http\Livewire\Models\Employees;

use App\Domain\Company\Models\Company;
use Auth;
use Livewire\Component;
use App\Domain\Employee\Actions\CreateEmployee;
use App\Domain\Employee\Models\EmployeesDesignation;
use App\Domain\Office\Models\Office;

class Create extends Component
{
    public ?string $name = null;
    public ?string $salary = null;
    public ?string $email = null;
    public ?string $office_id = null;
    public ?string $company_id = null;
    public ?string $employee_designation_id = null;

    public ?string $phone_number = null;

    public $offices;
    public $companies;
    public $designations;

    public bool $createSuccess = false;
    public bool $createFail = false;

    public function rules() : array
    {

        return \App\Domain\Employee\Actions\CreateEmployee::rules();
    }

    public function createEmployee()
    {
        $this->validate();
        $employee = CreateEmployee::run($this->input);
       $employee = CreateEmployee::run([
           "name" => $this->name,
           "email" => $this->email,
           "salary" => $this->salary,
           "office_id" => $this->office_id,
           "company_id" => $this->company_id,
           "employee_designation_id" => $this->employee_designation_id,
           "phone_number" => $this->phone_number,
       ]);

        if($employee != False)
        {
            $this->createSuccess = true;
        } else {
            $this->createFail = true;
        }
    }

    public function mount()
    {
        $this->company_id = Auth::user()->company_id;   // Get the company id of the user


        if(Auth::user()->hasRole('admin'))              // If Admin then display All Offices
        {
            $this->offices = Office::get(['id', 'name']);
            $this->companies = Company::get(['id', 'name']);
        } else {
            $this->offices = Office::whereCompanyId(Auth::user()->company_id)->get(['id', 'name']);
        }
        $this->designations = EmployeesDesignation::get(['id', 'name']);
    }

    public function render()
    {
        return view('livewire.models.employees.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
