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
    public $office;

    public function mount($office = null)
    {
        $this->office = $office;
        $this->perPage = 10;
    }

    public function render()
    {
        return (!isset($this->office)) ? view('livewire.models.employees.index', [
            'employees' => Employee::where('name', 'like', '%' . $this->searchTerm . '%')
                ->paginate($this->perPage)
        ]) : view('livewire.models.employees.index', [
            'employees' => Employee::where('name', 'like', '%' . $this->searchTerm . '%')
                ->where('office_id', $this->office->id)
                ->paginate($this->perPage)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
