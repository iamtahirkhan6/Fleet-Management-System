<?php

namespace App\Domain\Payment\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BankAccount extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $fillable = [
        'account_name',
        'account_number',
        'ifsc_code',
    ];

    public function bankable()
    {
        return $this->morphTo();
    }
}
