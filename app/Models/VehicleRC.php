<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Request;

class VehicleRC extends Model
{
    use HasFactory;

    protected $fillable = ["number", "owner_name", "reg_date", "model", "fitness_upto", "insurance_upto", "authority", "class", "chassis_number", "engine_number", "model", "rto_code"];

    public static function create(array $attributes = [])
    {
        $response = Http::withHeaders(
            ['API-KEY' => '#7Qj%$9H#%R24d23K8$@',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Referer' => Request::server('HTTP_HOST')])
        ->post("https://apiclub.in/api/v1/vehicle_info/".$attributes["number"])
        ->json();

        if($response["code"] == "200")
        {
            $attributes["number"]          = strtoupper($response["response"]["license_plate"]);
            $attributes["owner_name"]      = $response["response"]["owner_name"];
            $attributes["reg_date"]        = $response["response"]["registration_date"];
            $attributes["model"]           = $response["response"]["model"];
            $attributes["fitness_upto"]    = $response["response"]["fitness_upto"];
            $attributes["insurance_upto"]  = $response["response"]["insurance_expiry"];
            $attributes["class"]           = $response["response"]["class"];
            $attributes["chassis_number"]  = $response["response"]["chassis_number"];
            $attributes["engine_number"]   = $response["response"]["engine_number"];
            $attributes["authority"]       = $response["response"]["registering_authority"];
            $attributes["rto_code"]        = $response["response"]["rto_code"];

            $model = static::query()->create($attributes);

            return $model;
        }
        
        
    }
}


