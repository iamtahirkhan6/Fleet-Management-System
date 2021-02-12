<?php

namespace App\Domain\Payment\Actions\Razorpay;

use App\Domain\Party\Models\Party;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateContact
{
    use AsAction;

    public function handle($party_id, $update_model = null)
    {
        if (!isset($party)) $party = Party::find($party_id);
        $company = Auth::user()->company;

        if (is_null($party->razorpay_contact_id)) {
            if (isset($company->razorpay_key_id) && isset($company->razorpay_key_secret)) {
                $response = Http::withBasicAuth($company->razorpay_key_id, $company->razorpay_key_secret)->post('https://api.razorpay.com/v1/contacts', [
                    'name'         => $party->name,
                    'contact'      => (isset($party->phoneNumber)) ? $party->phoneNumber : null,
                    'type'         => 'customer',
                    'reference_id' => 'Party ' . $party->id,
                ]);

                $response = $response->json();

                if ($update_model) {
                    $party = Party::updateOrCreate([ 'id' => $party_id ], [ 'razorpay_contact_id' => (string) $response['id'] ]);
                }

                return (str_contains($response['id'], 'cont_')) ? $response['id'] : false;
            } else {
                return false;
            }
        } else {
            return $party->razorpay_contact_id;
        }

    }
}
