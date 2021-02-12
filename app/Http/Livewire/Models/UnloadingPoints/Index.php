<?php

namespace App\Http\Livewire\Models\UnloadingPoints;

use Livewire\Component;
use App\Domain\UnloadingPoint\Models\UnloadingPoint;

class Index extends Component
{
    public function render()
    {
        return view('livewire.models.unloading-points.index', ["unloading_points" => UnloadingPoint::paginate(15)]);
    }
}
