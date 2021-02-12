<?php

namespace App\Http\Livewire\Models\LoadingPoints;

use Livewire\Component;
use Livewire\WithPagination;
use App\Domain\LoadingPoint\Models\LoadingPoint;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.models.loading-points.index', ["loadingpoints" => LoadingPoint::paginate(15)]);
    }
}
