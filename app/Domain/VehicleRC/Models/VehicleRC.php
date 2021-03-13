<?php

namespace App\Domain\VehicleRC\Models;

use Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\VehicleRC\Models\VehicleRC
 *
 * @property int                             $id
 * @property string                          $number
 * @property string|null                     $model
 * @property string|null                     $class
 * @property string|null                     $reg_date
 * @property string|null                     $puc_upto
 * @property string|null                     $rto_code
 * @property string|null                     $fuel_norm
 * @property string|null                     $fuel_type
 * @property string|null                     $authority
 * @property string|null                     $owner_name
 * @property string|null                     $mvtax_upto
 * @property string|null                     $noc_details
 * @property string|null                     $fitness_upto
 * @property string|null                     $roadtax_upto
 * @property string|null                     $vehicle_type
 * @property string|null                     $engine_number
 * @property string|null                     $insurance_upto
 * @property string|null                     $chassis_number
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
 * @property string $license_plate
 * @property string|null $rto
 * @property string|null $color
 * @property string|null $state
 * @property string|null $weight
 * @property string|null $isValid
 * @property string|null $financer
 * @property string|null $vehicle_age
 * @property string|null $price_range
 * @property string|null $ownership_type
 * @property string|null $engine_capacity
 * @property string|null $registration_date
 * @property string|null $registering_authority
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereEngineCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereFinancer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereIsValid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereLicensePlate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereOwnershipType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC wherePriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereRegisteringAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereRegistrationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereRto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereVehicleAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereWeight($value)
 * @property string|null $insurance_expiry
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleRC whereInsuranceExpiry($value)
 */

class VehicleRC extends Model
{
    use HasFactory;

    protected $table = 'vehicle_rc_details';

    protected $fillable = [
        "license_plate",
        "owner_name",
        "ownership_type",
        "financer",
        "model",
        "class",
        "registration_date",
        "vehicle_age",
        "insurance_expiry",
        "chassis_number",
        "engine_number",
        "color",
        "fuel_type",
        "vehicle_type",
        "engine_capacity",
        "fuel_norm",
        "weight",
        "fitness_upto",
        "registering_authority",
        "price_range",
        "noc_details",
        "puc_upto",
        "mvtax_upto",
        "roadtax_upto",
        "vehicle_type",
        "rto_code",
        "rto",
        "state",
        "isValid",
    ];

    public static function create(array $attributes = [])
    {
        // Backward Compatibility
        if (isset($attributes['number'])) {
            $attributes['license_plate'] = $attributes['number'];
            unset($attributes['number']);
        }

        $response = Http::withHeaders([
                                          'API-KEY'      => config('apiclub.api_key'),
                                          'Content-Type' => 'application/x-www-form-urlencoded',
                                          'Referer'      => Request::server('HTTP_HOST'),
                                      ])
            ->post("https://apiclub.in/api/v1/vehicle_info/" . $attributes["license_plate"])
            ->json();
        if (isset($response['code']) && isset($response['response']['isValid'])) {
            if($response['code'] == '200' && $response['response']['isValid'] == 'Yes')
            {
                $attributes['license_plate']         = isset($response['response']['license_plate']) ? strtoupper($response['response']['license_plate']) : null;
                $attributes['owner_name']            = isset($response['response']['owner_name']) ? strtoupper($response['response']['owner_name']) : null;
                $attributes['ownership_type']        = isset($response['response']['ownership_type']) ? strtoupper($response['response']['ownership_type']) : null;
                $attributes['financer']              = isset($response['response']['financer']) ? strtoupper($response['response']['financer']) : null;
                $attributes['model']                 = isset($response['response']['model']) ? strtoupper($response['response']['model']) : null;
                $attributes['class']                 = isset($response['response']['class']) ? strtoupper($response['response']['class']) : null;
                $attributes['registration_date']     = isset($response['response']['registration_date']) ? strtoupper($response['response']['registration_date']) : null;
                $attributes['vehicle_age']           = isset($response['response']['vehicle_age']) ? strtoupper($response['response']['vehicle_age']) : null;
                $attributes['insurance_expiry']      = isset($response['response']['insurance_expiry']) ? strtoupper($response['response']['insurance_expiry']) : null;
                $attributes['chassis_number']        = isset($response['response']['chassis_number']) ? strtoupper($response['response']['chassis_number']) : null;
                $attributes['engine_number']         = isset($response['response']['engine_number']) ? strtoupper($response['response']['engine_number']) : null;
                $attributes['color']                 = isset($response['response']['color']) ? strtoupper($response['response']['color']) : null;
                $attributes['fuel_type']             = isset($response['response']['fuel_type']) ? strtoupper($response['response']['fuel_type']) : null;
                $attributes['vehicle_type']          = isset($response['response']['vehicle_type']) ? strtoupper($response['response']['vehicle_type']) : null;
                $attributes['engine_capacity']       = isset($response['response']['engine_capacity']) ? strtoupper($response['response']['engine_capacity']) : null;
                $attributes['fuel_norm']             = isset($response['response']['fuel_norm']) ? strtoupper($response['response']['fuel_norm']) : null;
                $attributes['weight']                = isset($response['response']['weight']) ? strtoupper($response['response']['weight']) : null;
                $attributes['fitness_upto']          = isset($response['response']['fitness_upto']) ? strtoupper($response['response']['fitness_upto']) : null;
                $attributes['registering_authority'] = isset($response['response']['registering_authority']) ? strtoupper($response['response']['registering_authority']) : null;
                $attributes['price_range']           = isset($response['response']['price_range']) ? strtoupper($response['response']['price_range']) : null;
                $attributes['noc_details']           = isset($response['response']['noc_details']) ? strtoupper($response['response']['noc_details']) : null;
                $attributes['puc_upto']              = isset($response['response']['puc_upto']) ? strtoupper($response['response']['puc_upto']) : null;
                $attributes['mvtax_upto']            = isset($response['response']['mvtax_upto']) ? strtoupper($response['response']['mvtax_upto']) : null;
                $attributes['roadtax_upto']          = isset($response['response']['roadtax_upto']) ? strtoupper($response['response']['roadtax_upto']) : null;
                $attributes['vehicle_type']          = isset($response['response']['vehicle_type']) ? strtoupper($response['response']['vehicle_type']) : null;
                $attributes['rto_code']              = isset($response['response']['rto_code']) ? strtoupper($response['response']['rto_code']) : null;
                $attributes['rto']                   = isset($response['response']['rto']) ? strtoupper($response['response']['rto']) : null;
                $attributes['state']                 = isset($response['response']['state']) ? strtoupper($response['response']['state']) : null;
                $attributes['isValid']               = isset($response['response']['isValid']) ? strtoupper($response['response']['isValid']) : null;

                return static::query()->create($attributes);
            } else {
                return false;
            }
        } else {
            return null;
        }
    }
}


