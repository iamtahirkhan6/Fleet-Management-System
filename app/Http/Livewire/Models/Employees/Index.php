<?php

namespace App\Http\Livewire\Models\Employees;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use App\Domain\Employee\Models\Employee;


class Index extends Component
{

    use WithPagination;

    public $perPage;
    public $searchTerm;
    public $officeParameter;

    public function mount($_office = null)
    {
        $this->perPage = 10;
    }

    public function render()
    {
        if ($this->officeParameter == null) {
            if (Auth::user()->hasRole('admin')) {
                return view('livewire.models.employees.index', [
                    'employees' => Employee::where('name', 'like', '%' . $this->searchTerm . '%')->paginate($this->perPage)
                ]);
            } else {
                return view('livewire.models.employees.index', [
                    'employees' => Employee::whereCompanyId(Auth::user()->company_id)->where('name', 'like', '%' . $this->searchTerm . '%')->paginate($this->perPage)
                ]);
            }
        } else {
            if (Auth::user()->hasRole('admin')) {
                return view('livewire.models.employees.index', [
                    'employees' => Employee::where('name', 'like', '%' . $this->searchTerm . '%')->where('office_id', $this->officeParameter->id)->paginate($this->perPage)
                ]);
            } else {
                return view('livewire.models.employees.index', [
                    'employees' => Employee::whereCompanyId(Auth::user()->company_id)->where('name', 'like', '%' . $this->searchTerm . '%')->where('office_id', $this->officeParameter->id)->paginate($this->perPage)
                ]);
            }

        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
