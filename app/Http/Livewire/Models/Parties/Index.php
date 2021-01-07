<?php

namespace App\Http\Livewire\Models\Parties;

use App\Models\Party;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $searchTerm;
    public $perPage;
    
    public function render()
    {
        return view('livewire.models.parties.index', ['parties' => Party::where('name','like', '%'.$this->searchTerm.'%')->paginate($this->perPage)]);
    }
}
