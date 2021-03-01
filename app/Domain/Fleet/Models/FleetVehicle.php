<?php

namespace App\Domain\Fleet\Models;

use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Fleet\Models\FleetVehicle
 *
 * @property int $id
 * @property string $number
 * @property string $owner_name
 * @property string $reg_date
 * @property string $model
 * @property string $fitness_upto
 * @property string $insurance_upto
 * @property string $class
 * @property string $chassis_number
 * @property string $engine_number
 * @property string $authority
 * @property string $rto_code
 * @property int $fleet_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Fleet\Models\Fleet $fleet
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereChassisNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereEngineNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereFitnessUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereFleetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereInsuranceUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereOwnerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereRegDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereRtoCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $license_plate
 * @property string|null $rto
 * @property string|null $color
 * @property string|null $state
 * @property string|null $weight
 * @property string|null $isValid
 * @property string|null $financer
 * @property string|null $puc_upto
 * @property string|null $fuel_type
 * @property string|null $fuel_norm
 * @property string|null $mvtax_upto
 * @property string|null $vehicle_age
 * @property string|null $price_range
 * @property string|null $noc_details
 * @property string|null $vehicle_type
 * @property string|null $roadtax_upto
 * @property string|null $ownership_type
 * @property string|null $engine_capacity
 * @property string|null $registration_date
 * @property string|null $registering_authority
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereEngineCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereFinancer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereFuelNorm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereFuelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereIsValid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereLicensePlate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereMvtaxUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereNocDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereOwnershipType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle wherePriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle wherePucUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereRegisteringAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereRegistrationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereRoadtaxUpto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereRto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereVehicleAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereVehicleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereWeight($value)
 */

class FleetVehicle extends Model
{
    use HasFactory;
    use MultiTenable;

    public function fleet()
    {
        return $this->belongsTo('App\Domain\Fleet\Models\Fleet', 'id', 'fleet_id');
    }

    public function trips()
    {
        return $this->hasMany('App\Domain\Trip\Models\Trip');
    }
}
