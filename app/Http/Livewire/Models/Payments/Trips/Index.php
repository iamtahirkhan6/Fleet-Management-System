<?php

namespace App\Http\Livewire\Models\Payments\Trips;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\TripPaymentTransaction;

class Index extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.models.payments.trips.index', ['payments' => TripPaymentTransaction::latest()->paginate(25)]);
    }
}
