<?php

namespace App\Http\Livewire\Models\Parties;

use App\Domain\Party\Models\Party;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $searchTerm;
    public $perPage;

    public function render()
    {
        return view('livewire.models.parties.index', ['parties' => Party::whereCompanyId(Auth::user()->company_id)->where('name','like', '%'.$this->searchTerm.'%')->paginate($this->perPage)]);
    }
}
