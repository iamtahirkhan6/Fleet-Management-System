<?php

namespace App\Domain\Payment\Actions\Razorpay;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Domain\Company\Models\Company;
use App\Domain\Payment\Models\Payment;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Domain\Payment\Models\BankAccount;

class CreatePayout
{
    use AsAction;

    public function handle(int $payment_id, string $mode, $reference = null)
    {
        $payment         = Payment::find($payment_id);
        $bank_account_id = $payment->bank_account_id;
        $amount          = $payment->amount;
        $reference       = (isset($payment->trip_id)) ? $payment->trip_id : null;

        $bank = BankAccount::find($bank_account_id);
        if (is_null($bank->fund_account_id)) {
            $party                 = $bank->bankable;
            if(!isset($party->razorpay_contact_id))
            {
                $party->razorpay_contact_id = CreateContact::run($party->id, true);
                $party->save();
                $party->refresh();
            }
            $bank->fund_account_id = CreateFundAccount::run($bank->account_name, $bank->account_number, $bank->ifsc_code, $party->id, $bank->company_id, $party->razorpay_account_id);
            $bank->save();
        }

        $company  = Company::find(Auth::user()->company_id);
        if(($company->use_razorpay == 1) && isset($company->razorpay_key_id) && isset($company->razorpay_key_secret))
        {

            $response = Http::withBasicAuth($company->razorpay_key_id, $company->razorpay_key_secret)->post('https://api.razorpay.com/v1/payouts', [
                'account_number'       => $company->razorpay_account_number,
                'fund_account_id'      => $bank->fund_account_id,
                'amount'               => $amount,
                'currency'             => 'INR',
                'mode'                 => $mode,
                'queue_if_low_balance' => 'true',
                'reference_id'         => $reference,
            ]);
            if (isset($response->json()->id)) {
                $payment->razorpay_payout_id = $response->json()->id;
                $payment->save();

                return $response->json()->id;
            } else {
                return false;
            }
        } else {
            return false;
        }


    }
}
