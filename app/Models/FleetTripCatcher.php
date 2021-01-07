<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FleetTripCatcher extends Model
{
    use HasFactory;

    protected $fillable = ['vehicleno', 'etpno', 'source', 'destination', 'starttime', 'pollingtime'];

}
