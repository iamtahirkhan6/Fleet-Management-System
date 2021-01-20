<?php

namespace App\Http\Livewire\Models\Parties\Trips;

use App\Domain\Trip\Models\Trip;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $party;

    public function mount($party)
    {
        $this->party = $party;
    }

    public function render()
    {
        return view('livewire.models.parties.trips.index', ['trips' => Trip::whereCompanyId(Auth::user()->company_id)->where('party_id', $this->party->id)->paginate(25)]);
    }
}
