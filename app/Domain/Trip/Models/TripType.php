<?php

namespace App\Domain\Trip\Models;

use Illuminate\Database\Eloquent\Model;

class TripType extends Model
{
    protected array $fillable = [
        "id",
        "name",
    ];
}
