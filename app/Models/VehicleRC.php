<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Request;

/**
 * App\Models\VehicleRC
 *
 * @property int $id
 * @property string $number
 * @property string|null $model
 * @property string|null $class
 * @property string|null $reg_date
 * @property string|null $puc_upto
 * @property string|null $rto_code
 * @property string|null $fuel_norm
 * @property string|null $fuel_type
 * @property string|null $authority
 * @property string|null $owner_name
 * @property string|null $mvtax_upto
 * @property string|null $noc_details
 * @property string|null $fitness_upto
 * @property string|null $roadtax_upto
 * @property string|null $vehicle_type
 * @property string|null $engine_number
 * @property string|null $insurance_upto
 * @property string|null $chassis_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC query()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereChassisNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereEngineNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereFitnessUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereFuelNorm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereFuelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereInsuranceUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereMvtaxUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereNocDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereOwnerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC wherePucUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereRegDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereRoadtaxUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereRtoCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereVehicleType($value)
 * @mixin \Eloquent
 */
class VehicleRC extends Model
{
    use HasFactory;

    protected $table = 'vehicle_rc_details';

    protected $fillable = ["number", "owner_name", "reg_date", "model", "fitness_upto", "insurance_upto", "authority", "class", "chassis_number", "engine_number", "model", "rto_code"];

    public static function create(array $attributes = [])
    {
        $response = Http::withHeaders(
            [
                'API-KEY' => '#7Qj%$9H#%R24d23K8$@',
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Referer' => Request::server('HTTP_HOST')
            ])
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
            $attributes["fuel_type"]       = $response["response"]["fuel_type"];
            $attributes["fuel_norm"]       = $response["response"]["fuel_norm"];
            $attributes["puc_upto"]        = $response["response"]["puc_upto"];
            $attributes["mvtax_upto"]      = $response["response"]["mvtax_upto"];
            $attributes["noc_details"]     = $response["response"]["noc_details"];
            $attributes["roadtax_upto"]    = $response["response"]["roadtax_upto"];
            $attributes["vehicle_type"]    = $response["response"]["vehicle_type"];

            $model = static::query()->create($attributes);

            return $model;
        }


    }
}


