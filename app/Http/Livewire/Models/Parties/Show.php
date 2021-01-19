<?php
namespace App\Http\Livewire\Models\Parties;

use Livewire\Component;
use App\Domain\Trip\Models\Trip;
use App\Domain\Party\Models\Party;
use App\Models\MarketVehicle;
use App\Models\PartiesBankAccount;

class Show extends Component
{
    public $party;


    public function mount($party)
    {
        $this->party = $party;
    }

    public function render()
    {
        return view('livewire.models.parties.show', [
            'bank_accounts' => $this->party->bank_accounts,
            'market_vehicles' => $this->party->vehicles,
            'trips' => $this->party->trips,
        ]);
    }
}
