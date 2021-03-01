<?php

namespace App\Domain\General\Actions;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Validator;
use App\Domain\General\Models\GstDetails;

class FetchGstDetails
{
    use AsAction;

    public function handle($gstn)
    {
        $validation = Validator::make(["gstn" => $gstn], ["gstn" => 'required|alpha_num|size:15']);
        if (!$validation->fails()) {
            return GstDetails::whereGstn($gstn)
                ->exists() == false ? (($this->fetchFromApi($gstn) == true) ? $this->fetchFromApi($gstn) : false) : GstDetails::whereGstn($gstn)
                ->first();
        } else {
            return false;
        }
    }

    public static function fetchFromApi($gstn)
    {
        $response = Http::withHeaders([
                                          'API-KEY'      => config('apiclub.api_key'),
                                          'Content-Type' => 'application/x-www-form-urlencoded',
                                          'Referer'      => Request::server('HTTP_HOST'),
                                      ])
            ->post('https://apiclub.in/api/v1/gstin_info/' . strtoupper($gstn))
            ->json();
        if ($response['code'] == '200') {
            return GstDetails::updateOrCreate(['gstn' => isset($response['response']['gstin']) ? $response['response']['gstin'] : null,],
                                              [
                                                  "legal_name"    => isset($response['response']['legal_name']) ? $response['response']['legal_name'] : null,
                                                  "trade_name"    => isset($response['response']['trade_name']) ? $response['response']['trade_name'] : null,
                                                  "taxpayer_type" => isset($response['response']['taxpayer_type']) ? $response['response']['taxpayer_type'] : null,
                                                  "reg_date"      => isset($response['response']['reg_date']) ? $response['response']['reg_date'] : null,
                                                  "state_code"    => isset($response['response']['state_code']) ? $response['response']['state_code'] : null,
                                                  "nature"        => isset($response['response']['nature']) ? $response['response']['nature'] : null,
                                                  "jurisdiction"  => isset($response['response']['jurisdiction']) ? $response['response']['jurisdiction'] : null,
                                                  "business_type" => isset($response['response']['business_type']) ? $response['response']['business_type'] : null,
                                                  "last_update"   => isset($response['response']['last_update']) ? $response['response']['last_update'] : null,
                                                  "address_1"     => isset($response['response']['address']['addr1']) ? $response['response']['address']['addr1'] : null,
                                                  "address_2"     => isset($response['response']['address']['addr2']) ? $response['response']['address']['addr2'] : null,
                                                  "pin"           => isset($response['response']['address']['pin']) ? $response['response']['address']['pin'] : null,
                                                  "state"         => isset($response['response']['address']['state']) ? $response['response']['address']['state'] : null,
                                                  "city"          => isset($response['response']['address']['city']) ? $response['response']['address']['city'] : null,
                                                  "district"      => isset($response['response']['address']['district']) ? $response['response']['address']['district'] : null,
                                                  "status"        => isset($response['response']['status']) ? $response['response']['status'] : null,
                                              ]);
        } else {
            return false;
        }
    }
}
