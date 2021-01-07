<?php

namespace App\Http\Livewire\Models\Consignees;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Consignee;

class Index extends Component
{
    use WithPagination;
    
    public $searchTerm;
    public function render()
    {
        return view('livewire.models.consignees.index', ['consignees' => Consignee::where('name', 'like', '%'.$this->searchTerm.'%')->paginate(15)]);
    }
}
