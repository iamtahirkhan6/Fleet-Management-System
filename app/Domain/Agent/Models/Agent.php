<?php

namespace App\Domain\Agent\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use App\Domain\General\Models\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agent extends Model
{
    use MultiTenable;
    /**
     * @return string
     */

    /**
     * @param string $name
     */
    public function setName(string $name) : void
    {
        $this->name = ucfirst($name);
    }

    use HasFactory;

    public function phoneNumber()
    {
        return $this->morphOne(PhoneNumber::class, 'phoneable');
    }


}
