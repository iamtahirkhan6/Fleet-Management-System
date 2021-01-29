<?php

namespace App\Domain\VehicleRC\Models;

use Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleRC extends Model
{
    use HasFactory;

    protected $table = 'vehicle_rc_details';

    protected $fillable = [
        "number",
        "owner_name",
        "reg_date",
        "model",
        "fitness_upto",
        "insurance_upto",
        "authority",
        "class",
        "chassis_number",
        "engine_number",
        "model",
        "rto_code",
    ];

    public static function create(array $attributes = [])
    {
        $response = Http::withHeaders([
            'API-KEY'      => '#7Qj%$9H#%R24d23K8$@',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Referer'      => Request::server('HTTP_HOST'),
        ])->post("https://apiclub.in/api/v1/vehicle_info/" . $attributes["number"])->json();

        if ($response["code"] == "200") {
            $attributes["number"]         = isset($response['response']['license_plate']) ? strtoupper($response['response']['license_plate']) : null;
            $attributes["owner_name"]     = isset($response["response"]["owner_name"]) ? $response['response']['owner_name'] : null;
            $attributes["reg_date"]       = isset($response["response"]["registration_date"]) ? $response['response']['registration_date'] : null;
            $attributes["model"]          = isset($response["response"]["model"]) ? $response['response']['model'] : null;
            $attributes["fitness_upto"]   = isset($response["response"]["fitness_upto"]) ? $response['response']['fitness_upto'] : null;
            $attributes["insurance_upto"] = isset($response["response"]["insurance_expiry"]) ? $response['response']['insurance_expiry'] : null;
            $attributes["class"]          = isset($response["response"]["class"]) ? $response['response']['class'] : null;
            $attributes["chassis_number"] = isset($response["response"]["chassis_number"]) ? $response['response']['chassis_number'] : null;
            $attributes["engine_number"]  = isset($response["response"]["engine_number"]) ? $response['response']['engine_number'] : null;
            $attributes["authority"]      = isset($response["response"]["registering_authority"]) ? $response['response']['registering_authority'] : null;
            $attributes["rto_code"]       = isset($response["response"]["rto_code"]) ? $response['response']['rto_code'] : null;
            $attributes["fuel_type"]      = isset($response["response"]["fuel_type"]) ? $response['response']['fuel_type'] : null;
            $attributes["fuel_norm"]      = isset($response["response"]["fuel_norm"]) ? $response['response']['fuel_norm'] : null;
            $attributes["puc_upto"]       = isset($response["response"]["puc_upto"]) ? $response['response']['puc_upto'] : null;
            $attributes["mvtax_upto"]     = isset($response["response"]["mvtax_upto"]) ? $response['response']['mvtax_upto'] : null;
            $attributes["noc_details"]    = isset($response["response"]["noc_details"]) ? $response['response']['noc_details'] : null;
            $attributes["roadtax_upto"]   = isset($response["response"]["roadtax_upto"]) ? $response['response']['roadtax_upto'] : null;
            $attributes["vehicle_type"]   = isset($response["response"]["vehicle_type"]) ? $response['response']['vehicle_type'] : null;

            $model = static::query()->create($attributes);

            return $model;
        }


    }
}


