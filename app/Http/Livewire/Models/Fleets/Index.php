<?php

namespace App\Http\Livewire\Models\Fleets;

use Livewire\Component;
use Livewire\WithPagination;
use App\Domain\Fleet\Models\Fleet;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.models.fleets.index', ['fleets' => Fleet::paginate(10)]);
    }
}
