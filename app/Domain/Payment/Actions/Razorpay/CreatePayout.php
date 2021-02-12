<?php

namespace App\Domain\Payment\Actions\Razorpay;

use App\Domain\Company\Models\Company;
use App\Domain\Payment\Models\BankAccount;
use App\Domain\Payment\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Lorisleiva\Actions\Concerns\AsAction;

class CreatePayout
{
    use AsAction;

    public function handle(int $payment_id, string $mode, $reference = null)
    {
        $payment         = Payment::find($payment_id);
        $bank_account_id = $payment->bank_account_id;
        $amount          = (int)$this->toPaisa(round($payment->getRawOriginal('amount'), '2'));
        $reference       = (isset($payment->trip_id)) ? (string) $payment->trip_id : null;
        $bank            = BankAccount::find($bank_account_id);

        if (is_null($bank->fund_account_id)) {
            $party = $bank->bankable;
            if (!isset($party->razorpay_contact_id)) {
                $party->razorpay_contact_id = CreateContact::run($party->id, false);
                $party->save();
                $party->refresh();
            }
            $bank->fund_account_id = CreateFundAccount::run($bank->account_name, $bank->account_number,
                                                            $bank->ifsc_code, $party->id, $party->razorpay_contact_id,
                                                            false);
            $bank->save();
        }
        $company = Company::find(Auth::user()->company_id);
        if (($company->use_razorpay == 1) && isset($company->razorpay_key_id) && isset($company->razorpay_key_secret)) {
            $response = Http::withBasicAuth($company->razorpay_key_id,
                                            $company->razorpay_key_secret)
                ->post('https://api.razorpay.com/v1/payouts', [
                    'account_number'       => $company->razorpay_account_number,
                    'fund_account_id'      => $bank->fund_account_id,
                    'amount'               => $amount,
                    'currency'             => 'INR',
                    'mode'                 => $mode,
                    'queue_if_low_balance' => true,
                    'purpose'              => 'payout',
                    'reference_id'         => $reference,
                ]);
            $response = $response->json();

            if (isset($response["id"])) {
                $payment->razorpay_payout_id = $response['id'];
                $payment->payment_status_id  = 1;
                $payment->save();

                return $response['id'];
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }
    }

    function toPaisa($value) : int
    {
        return (int) (string) ((float) preg_replace('/[^0-9.]/', '', $value) * 100);
    }
}
