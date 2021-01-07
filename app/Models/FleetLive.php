<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FleetLive extends Model
{
    use HasFactory;

    protected $fillable = ['outtype','ttime','rectime','trips','rdev','mineral','sourcecode','lessycode','vehiclespeed','ignumber','gpsstatus','circle','starttime','endtime','destination','routename','latitude','longitude','imeino','etpno','vehcount','tripcount','vehicleno','outtime','intime','rdevstarttime','rdevendtime','rdevtime','pollingtime','company','destcode','time','index','source','status','location'];
}
