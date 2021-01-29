<?php

namespace App\Domain\Payment\Actions\Razorpay;

use Illuminate\Support\Facades\Http;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Domain\Payment\Razorpay\Actions\Party;
use App\Domain\Payment\Razorpay\Actions\Company;


class CreateContact
{
    use AsAction;

    public function handle($party_id, $company_id, $update_model = null) : int|bool
    {
        $party   = Party::find($party_id);
        $company = Company::find($company_id);

        if (isset($company->razorpay_key_id) && isset($company->razorpay_key_secret)) {

            $response = Http::withBasicAuth($company->razorpay_key_id, $company->razorpay_key_secret)->post('https://api.razorpay.com/v1/contacts', [
                'name'         => $party->name,
                'contact'      => (isset($party->phoneNumber)) ? $party->phoneNumber : '',
                'type'         => 'customer',
                'reference_id' => $party->id,
            ]);

            if ($update_model) {
                $party->razorpay_contact_id = (isset($response->id)) ? $response->id : '';
                $party->save();
            }

            return $response->id;
        } else {
            return false;
        }

    }
}
