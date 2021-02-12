<?php

namespace App\Http\Livewire\Models\Payments;

use Livewire\Component;
use App\Domain\Payment\Models\Payment;
use App\Domain\Payment\Actions\Razorpay\CreatePayout;

class Index extends Component
{
    public function render()
    {
        return view('livewire.models.payments.index', [ 'payments' => Payment::paginate(15) ]);
    }
}
