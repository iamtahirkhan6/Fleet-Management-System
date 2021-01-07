<?php
namespace App\Http\Livewire\Models\Parties;

use Livewire\Component;
use App\Models\Trip;
use App\Models\Party;
use App\Models\Vehicle;
use App\Models\PartiesBankAccount;

class Show extends Component
{
    public $party;
    public $party_id;
    public $bank_accounts;
    public $total_bank_accounts;
    public $vehicles;
    public $total_vehicles;
    public $trips;


    public function mount($party)
    {
        $this->party = $party;
        $this->party_id = $party->id;
        $this->total_vehicles = $party->total_vehicles();
        $this->total_bank_accounts = $party->total_bank_accounts();
        $this->trips = $party->trips();
    }

    public function render()
    {
        return view('livewire.models.parties.show', [
            'all_bank_accounts' => PartiesBankAccount::where('party_id', $this->party_id)->get(),
            'all_vehicles' => Vehicle::where('party_id', $this->party_id)->count(),
            'all_trips' => Trip::where('party_id', $this->party_id)->get(),
        ]);
    }
}
