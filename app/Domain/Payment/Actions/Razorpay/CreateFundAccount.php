<?php


namespace App\Domain\Payment\Actions\Razorpay;

use App\Domain\Party\Models\Party;
use Illuminate\Support\Facades\Http;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Domain\Payment\Models\BankAccount;
use App\Domain\Payment\Razorpay\Actions\Auth;
use App\Domain\Payment\Razorpay\Actions\Company;

class CreateFundAccount
{
    use AsAction;

    public function handle($account_name, $account_number, $ifsc_code, $party_id, $company_id, $razorpay_contact_id = null)
    {
        $company = Company::find(Auth::user()->company_id);

        if (isset($company->razorpay_key_id) && isset($company->razorpay_key_secret)) {

            if (!isset($razorpay_contact_id)) {
                $party               = Party::find($party_id);
                $razorpay_contact_id = (!isset($party->razorpay_contact_id)) ? CreateContact::run([
                    'name'    => $party->name,
                    'contact' => $party->phoneNumber,
                    'type'    => 'customer',
                ], $party_id, $company_id)->id : $party->razorpay_contact_id;
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

            $bank_account                  = BankAccount::whereAccountName($account_name)->whereAccountNumber($account_number)->whereIfscCode($ifsc_code)->whereCompanyId($company_id)->first();
            $bank_account->fund_account_id = $response->id;
            $bank_account->save();

            return $response->id;
        } else {
            return false;
        }
    }
}
