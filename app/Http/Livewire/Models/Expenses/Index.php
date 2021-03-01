<?php

namespace App\Http\Livewire\Models\Expenses;

use App\Domain\Expense\Models\Expense;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $perPage = 20;
    public $office;
    public function render()
    {
        return view('livewire.models.expenses.index', ['expenses' => Expense::where('office_id', $this->office->id)->with('category')->latest()->paginate($this->perPage)]);
    }
}
