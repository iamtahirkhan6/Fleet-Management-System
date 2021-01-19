<?php

namespace App\Http\Livewire\Models\Payments\Trips;

use Livewire\Component;
use Livewire\WithPagination;
use App\Domain\Trip\Models\TripPaymentTransaction;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.models.payments.trips.index', ['payments' => TripPaymentTransaction::with(['trip', 'party', 'bank'])->latest()->paginate(25)]);
    }
}
