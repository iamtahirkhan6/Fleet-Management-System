<?php

namespace App\Domain\Fleet\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FleetTripCatcher extends Model
{
    use HasFactory;

    protected array $fillable = [
        'vehicleno',
        'etpno',
        'source',
        'destination',
        'starttime',
        'pollingtime',
    ];

}
