<?php

namespace App\Domain\Fleet\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fleet extends Model
{
    use HasFactory;
    use MultiTenable;

    public function vehicles()
    {
        return $this->hasMany(FleetVehicle::class);
    }
}
