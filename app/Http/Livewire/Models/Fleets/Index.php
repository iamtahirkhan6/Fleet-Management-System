<?php

namespace App\Http\Livewire\Models\Fleets;

use App\Models\Fleet;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.models.fleets.index', ['fleets' => Fleet::latest()->paginate(10)]);
    }
}
