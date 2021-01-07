<?php

namespace App\Http\Livewire\Models\Mines;

use App\Models\Mine;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.models.mines.index', ["mines" => Mine::with('sector')->paginate(15)]);
    }
}
