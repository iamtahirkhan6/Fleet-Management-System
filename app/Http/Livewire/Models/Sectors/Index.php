<?php

namespace App\Http\Livewire\Models\Sectors;

use App\Models\Sector;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.models.sectors.index', ["sectors" => Sector::paginate(15)]);
    }
}
