<?php

namespace App\Http\Livewire\Models\Payments;

use Auth;
use Livewire\Component;
use App\Domain\Payment\Models\Payment;

class Index extends Component
{
    public bool $confirmingRazorPay = true;

    public function payUsingRazorpay($bank_account_id, $amount, $reference = null)
    {

    }

    public function render()
    {
        return view('livewire.models.payments.index', ['payments' => Payment::paginate(15)]);
    }
}
