<?php

namespace App\Http\Livewire\Models\UnloadingPoint;

use App\Domain\General\Models\UnloadingPoint;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.models.unloading-point.index', ["unloading_points" => UnloadingPoint::paginate(15)]);
    }
}
