<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fleet extends Model
{
    use HasFactory;

    public function vehicles()
    {
        return $this->hasMany(FleetVehicle::class);
    }

    public function total_vehicles()
    {
        return FleetVehicle::where('fleet_id', $this->id)->count();
    }
}
