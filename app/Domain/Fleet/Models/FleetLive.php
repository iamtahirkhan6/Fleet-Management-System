<?php

namespace App\Domain\Fleet\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Fleet\Models\FleetLive
 *
 * @property int $id
 * @property string|null $outtype
 * @property string|null $ttime
 * @property string|null $rectime
 * @property string|null $trips
 * @property string|null $rdev
 * @property string|null $mineral
 * @property string|null $sourcecode
 * @property string|null $lessycode
 * @property string|null $vehiclespeed
 * @property string|null $ignumber
 * @property string|null $gpsstatus
 * @property string|null $circle
 * @property string|null $starttime
 * @property string|null $endtime
 * @property string|null $destination
 * @property string|null $routename
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $imeino
 * @property string|null $etpno
 * @property string|null $vehcount
 * @property string|null $tripcount
 * @property string|null $vehicleno
 * @property string|null $outtime
 * @property string|null $intime
 * @property string|null $rdevstarttime
 * @property string|null $rdevendtime
 * @property string|null $rdevtime
 * @property string|null $pollingtime
 * @property string|null $company
 * @property string|null $destcode
 * @property string|null $time
 * @property string|null $index
 * @property string|null $source
 * @property string|null $status
 * @property string|null $location
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive query()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereCircle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereDestcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereEndtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereEtpno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereGpsstatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereIgnumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereImeino($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereIntime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereLessycode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereMineral($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereOuttime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereOuttype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive wherePollingtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereRdev($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereRdevendtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereRdevstarttime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereRdevtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereRectime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereRoutename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereSourcecode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereStarttime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereTripcount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereTrips($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereTtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereVehcount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereVehicleno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetLive whereVehiclespeed($value)
 * @mixin \Eloquent
 */
class FleetLive extends Model
{
    use HasFactory;

    protected $fillable = [
        'outtype',
        'ttime',
        'rectime',
        'trips',
        'rdev',
        'mineral',
        'sourcecode',
        'lessycode',
        'vehiclespeed',
        'ignumber',
        'gpsstatus',
        'circle',
        'starttime',
        'endtime',
        'destination',
        'routename',
        'latitude',
        'longitude',
        'imeino',
        'etpno',
        'vehcount',
        'tripcount',
        'vehicleno',
        'outtime',
        'intime',
        'rdevstarttime',
        'rdevendtime',
        'rdevtime',
        'pollingtime',
        'company',
        'destcode',
        'time',
        'index',
        'source',
        'status',
        'location',
    ];
}
