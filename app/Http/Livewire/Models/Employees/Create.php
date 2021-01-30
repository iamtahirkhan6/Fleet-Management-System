<?php

namespace App\Http\Livewire\Models\Employees;

use Auth;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;
use App\Domain\Employee\Actions\CreateEmployee;
use App\Domain\Employee\Models\EmployeesDesignation;
use App\Domain\Office\Models\Office;

class Create extends Component
{
    public Collection $offices;
    public Collection $designations;

    public bool $createSuccess = false;
    public bool $createFail = false;
    public bool $bankBool = false;

    public ?array $input = [
        "name" => null,
        "salary" => null,
        "email" => null,
        "office_id" => null,
        "company_id" => null,
        "employee_designation_id" => null,
        "phone_number" => null,
        "bank_bool" => null,
        "account_name" => null,
        "account_number" => null,
        "ifsc_code" => null,
    ];
    /**
     * @var int|mixed|null
     */

    /**
     * @var int|mixed|null
     */

    public function rules(): array
    {
        return CreateEmployee::rules(True, "input.");
    }

    public function createEmployee()
    {
        $this->validate();
        $this->input["bank_bool"] = $this->bankBool;
        $employee = CreateEmployee::run($this->input);

        if ($employee != False) {
            $this->createSuccess = true;
        } else {
            $this->createFail = true;
        }
    }

    public function mount()
    {
        $this->input["company_id"] = Auth::user()->company_id;   // Get the company id of the user
        $this->offices = Office::get(['id', 'name']);
        $this->designations = EmployeesDesignation::get(['id','name']);
    }

    public function render()
    {
        return view('livewire.models.company.employees.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
