<?php

namespace App\Domain\Party\Models;

use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Payment\Models\BankAccount;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Domain\MarketVehicle\Models\MarketVehicle;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Party extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use MultiTenable;

    protected $fillable = [
        'name',
        'pan',
        'company_id',
    ];

    public function phoneNumber()
    {
        return $this->morphOne(PhoneNumber::class, 'phoneable');
    }

    public function vehicles()
    {
        return $this->hasMany(MarketVehicle::class);
    }

    public function bankAccounts()
    {
        return $this->morphMany(BankAccount::class, "bankable");
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    public function totalBusiness()
    {
        return Trip::wherePartyId($this->id)->sum('amount');
    }

    public function totalMaterialTransported()
    {
        return Trip::wherePartyId($this->id)->sum('net_weight');
    }
}
