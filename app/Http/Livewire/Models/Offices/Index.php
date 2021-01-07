<?php

namespace App\Http\Livewire\Models\Offices;

use App\Models\Office;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.models.offices.index', ['offices' => Office::paginate(10)]);
    }
}
