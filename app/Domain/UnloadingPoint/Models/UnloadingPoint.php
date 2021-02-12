<?php

namespace App\Domain\UnloadingPoint\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UnloadingPoint extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $table = "unloading_points";
}
