<?php

namespace App\Http\Livewire\Models\Offices\Expenses;

use App\Domain\Expense\Models\Expense;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $perPage = 20;
    public $office;
    public function render()
    {
        return view('livewire.models.offices.expenses.index', ['expenses' => Expense::where('office_id', $this->office->id)->with('category')->latest()->paginate($this->perPage)]);
    }
}
