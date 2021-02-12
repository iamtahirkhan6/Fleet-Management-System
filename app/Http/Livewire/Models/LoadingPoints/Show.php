<?php

namespace App\Http\Livewire\Models\LoadingPoints;

use Livewire\Component;
use App\Domain\LoadingPoint\Models\LoadingPoint;

class Show extends Component
{
    public LoadingPoint $source;

    public function render()
    {
        return view('livewire.models.loading-points.index');
    }
}
