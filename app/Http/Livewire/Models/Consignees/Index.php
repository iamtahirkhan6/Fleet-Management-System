<?php

namespace App\Http\Livewire\Models\Consignees;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use App\Domain\Consignee\Models\Consignee;

class Index extends Component
{
    use WithPagination;

    public $searchTerm;

    public function render()
    {
        return view('livewire.models.consignees.index',
            ['consignees' => Consignee::where('name', 'like', '%'.$this->searchTerm.'%')
                ->paginate(15)]);
    }
}
