<?php

namespace App\Domain\General\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sector extends Model
{
    use HasFactory;

    public function mines()
    {
        return $this->hasMany(Mine::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

}
