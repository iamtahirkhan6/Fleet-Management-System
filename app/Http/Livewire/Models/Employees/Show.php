<?php

namespace App\Http\Livewire\Models\Employees;

use Livewire\Component;

class Show extends Component
{
    public $employee;

    public function mount($employee)
    {
        $this->employee = $employee;
    }

    public function render()
    {
        return view('livewire.models.employees.show');
    }
}
