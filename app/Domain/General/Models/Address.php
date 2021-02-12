<?php

namespace App\Domain\General\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;
    use MultiTenable;

    protected array $fillable = ["line_1", "line_2", "city", "zip", "state"];

    public function addressable()
    {
        return $this->morphTo();
    }
}
