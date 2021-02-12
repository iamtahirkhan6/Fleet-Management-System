<?php

namespace App\Domain\Fleet\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FleetLive extends Model
{
    use HasFactory;

    protected array $fillable = [
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
