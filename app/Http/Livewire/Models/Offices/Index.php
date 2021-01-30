<?php

namespace App\Http\Livewire\Models\Offices;

use App\Domain\Office\Models\Office;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.models.offices.index', ['offices' => Office::paginate(10)]);
    }
}
