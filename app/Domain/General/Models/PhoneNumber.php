<?php

namespace App\Domain\General\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhoneNumber extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $fillable = [ 'phone_number' ];

    public function phoneable()
    {
        return $this->morphTo();
    }
}
