<?php

namespace App\Http\Livewire\Models\Payments;

use Livewire\Component;
use App\Domain\Payment\Models\Payment;
use App\Domain\Payment\Actions\Razorpay\CreatePayout;

class Index extends Component
{
    public string  $mode                = '';
    public string  $payment_id;
    public string  $amount;
    public string  $account_name;
    public string  $account_number;
    public string  $ifsc_code;
    public ?string $reference;
    public bool    $confirmingRazorPay  = false;
    public bool    $showPaymentFailed   = false;
    public bool    $showPaymentComplete = false;

    public function payUsingRazorpay($payment_id, $amount, $account_name, $account_number, $ifsc_code, $reference = null)
    {
        $this->confirmingRazorPay = true;
        $this->payment_id         = $payment_id;
        $this->amount             = $amount;
        $this->account_name       = $account_name;
        $this->account_number     = $account_number;
        $this->ifsc_code          = $ifsc_code;
        $this->reference          = $reference;
    }

    public function completePayment()
    {
        $this->validate([ 'mode' => 'required|alpha' ], [ 'mode.required' => 'Payment mode is not selected.' ]);
        $result = CreatePayout::run($this->payment_id, $this->mode, $this->reference);
        if ($result != false) {
            $this->showPaymentComplete = true;
            $this->confirmingRazorPay  = false;
        } else {
            $this->showPaymentFailed = true;
        }
    }

    public function render()
    {
        return view('livewire.models.payments.index', [ 'payments' => Payment::paginate(15) ]);
    }
}
