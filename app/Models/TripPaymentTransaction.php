<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripPaymentTransaction extends Model
{
    use HasFactory;

    protected $fillable = ["party_id", "amount", "bank_account", "trip_id", "bank_account", "trip_id", "created_at", "updated_at"];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function party()
    {
        return $this->belongsTo(Party::class);
    }

    public function bank()
    {
        return $this->hasOne(PartiesBankAccount::class, 'id', 'bank_account');
    }
}
