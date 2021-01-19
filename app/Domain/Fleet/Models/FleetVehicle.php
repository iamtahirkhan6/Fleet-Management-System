<?php

namespace App\Domain\Fleet\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Fleet\Models\FleetVehicle
 *
 * @property int $id
 * @property string $number
 * @property int $fleet_id
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereChassisNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetVehicle whereClass($value)
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
 */
class FleetVehicle extends Model
{
    use HasFactory;

    public function fleet()
    {
        return $this->belongsTo('App\Fleet', 'id', 'fleet_id');
    }
}
