<?php

namespace App\Domain\Payment\Actions\Razorpay;

use Illuminate\Support\Facades\Http;
use App\Domain\Company\Models\Company;
use App\Domain\Payment\Models\Payment;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Domain\Payment\Models\BankAccount;

class CreatePayout
{
    use AsAction;

    public function handle(int $payment_id, int $bank_account_id, int $amount, string $mode, $company_id, $reference = null)
    {
        $bank = BankAccount::find($bank_account_id);
        if (!isset($bank->fund_account_id)) {
            $party                 = $bank->bankable();
            $bank->fund_account_id = CreateFundAccount::run($bank->account_name, $bank->account_number, $bank->ifsc_code, $party->id, $bank->company_id, $party->razorpay_account_id);
            $bank->save();
        }

        $company  = Company::find($company_id);
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
            $payment                     = Payment::find($payment_id);
            $payment->razorpay_payout_id = $response->json()->id;
            $payment->save();

            return $response->json()->id;
        } else {
            return false;
        }

    }
}
