<?php

namespace App\Http\Livewire\Models\Payments\Trips;

use Livewire\Component;
use App\Helper\Helper;

class Show extends Component
{
    public $transaction;
    public $created_at;

    public function mount($transaction)
    {
        $this->transaction = $transaction;
        $this->created_at = Helper::human_date_time($transaction->created_at);
    }
    public function render()
    {
        return view('livewire.models.payments.trips.show');
    }
}
