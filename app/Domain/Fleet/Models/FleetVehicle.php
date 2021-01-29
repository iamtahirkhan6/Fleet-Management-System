<?php

namespace App\Domain\Fleet\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FleetVehicle extends Model
{
    use HasFactory;
    use MultiTenable;

    public function fleet()
    {
        return $this->belongsTo('App\Fleet', 'id', 'fleet_id');
    }
}
