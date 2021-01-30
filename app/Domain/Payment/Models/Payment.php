<?php

namespace App\Domain\Payment\Models;

use App\Helper\Helper;
use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model implements HasMedia
{
    use HasFactory;
    use MultiTenable;
    use InteractsWithMedia;

    /*
            Define Relationships
    */

    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id');
    }

    public function bankAccount()
    {
        return $this->hasOne(BankAccount::class, 'id', 'bank_account_id');
    }

    public function method()
    {
        return $this->hasOne(PaymentMethod::class, 'id', 'payment_method_id');
    }

    public function status()
    {
        return $this->hasOne(PaymentStatus::class, 'id', 'payment_status_id');
    }

    /*
        Define Functions
    */

    public function getAmountAttribute($amount)
    {
        return Helper::rupee_format($amount);
    }

    public function type()
    {
        return (isset($this->trip_id)) ? "Market Vehicle Payment" : "Other";
    }
}
