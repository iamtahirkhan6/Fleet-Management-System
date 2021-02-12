<?php


namespace App\Domain\Payment\Actions\Razorpay;

use App\Domain\Payment\Models\BankAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateFundAccount
{
    use AsAction;

    public function handle(
        $account_name,
        $account_number,
        $ifsc_code,
        $party_id,
        $razorpay_contact_id = null,
        $update = null
    ) {
        $company = Auth::user()->company;
        if (isset($company->razorpay_key_id) && isset($company->razorpay_key_secret)) {
            $bank_account = BankAccount::whereAccountName($account_name)->whereAccountNumber($account_number)->whereIfscCode($ifsc_code)->whereBankableType('App\Domain\Party\Models\Party')->whereBankableId($party_id)->first();
            if ( ! isset($bank_account->fund_account_id)) {
                if ( ! isset($razorpay_contact_id)) {
                    $razorpay_contact_id = CreateContact::run($party_id, true);
                }

                $response = Http::withBasicAuth($company->razorpay_key_id,
                    $company->razorpay_key_secret)->post('https://api.razorpay.com/v1/fund_accounts', [
                    'contact_id'   => $razorpay_contact_id,
                    'account_type' => 'bank_account',
                    'bank_account' => [
                        'name'           => $account_name,
                        'account_number' => $account_number,
                        'ifsc'           => $ifsc_code,
                    ],
                ]);
                $response = $response->json();
                if ($update) {
                    BankAccount::updateOrCreate([
                        'account_name'   => $account_name,
                        'account_number' => $account_number,
                        'ifsc_code'      => $ifsc_code,
                    ], ['fund_account_id' => $response['id']]);
                }

                return $response['id'];
            } else {
                return $bank_account->fund_account_id;
            }
        } else {
            return false;
        }
    }
}
