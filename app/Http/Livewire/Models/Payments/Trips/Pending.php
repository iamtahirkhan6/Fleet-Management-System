<?php

namespace App\Http\Livewire\Models\Payments\Trips;

use Auth;
use Livewire\Component;
use App\Domain\Trip\Models\Trip;

class Pending extends Component
{
    public function render()
    {
        return view('livewire.models.payments.trips.pending', [
            'trips' => Trip::whereCompanyId(Auth::user()->company_id)->wherePaymentDone(0)->latest()->paginate(10)
        ]);
    }
}
