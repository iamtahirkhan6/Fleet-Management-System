<?php


namespace App\Domain\Payment\Actions\Razorpay;

use Illuminate\Support\Facades\Auth;
use App\Domain\Party\Models\Party;
use Illuminate\Support\Facades\Http;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Domain\Payment\Models\BankAccount;

class CreateFundAccount
{
    use AsAction;

    public function handle($account_name, $account_number, $ifsc_code, $party_id, $razorpay_contact_id = null)
    {
        $company = Auth::user()->company;

        if (isset($company->razorpay_key_id) && isset($company->razorpay_key_secret)) {

            if (!isset($razorpay_contact_id)) {
                $party               = Party::find($party_id);
                $razorpay_contact_id = (!isset($party->razorpay_contact_id)) ? CreateContact::run($party_id, $party, true)->id : null;
            }

            $response = Http::withBasicAuth($company->razorpay_key_id, $company->razorpay_key_secret)->post('https://api.razorpay.com/v1/fund_accounts', [
                'contact_id'   => $razorpay_contact_id,
                'account_type' => 'bank_account',
                'bank_account' => [
                    'name'           => $account_name,
                    'account_number' => $account_number,
                    'ifsc'           => $ifsc_code,
                ],
            ]);
            $response = $response->json();

            $bank_account                  = BankAccount::whereAccountName($account_name)->whereAccountNumber($account_number)->whereIfscCode($ifsc_code)->first();
            $bank_account->fund_account_id = $response->id;
            $bank_account->save();

            return $response->id;
        } else {
            return false;
        }
    }
}
