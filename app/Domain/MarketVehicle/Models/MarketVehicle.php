<?php

namespace App\Domain\MarketVehicle\Models;

use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarketVehicle extends Model
{
    use HasFactory;
    use MultiTenable;

    // Allow Mass Assignment
    protected $fillable = [
        'number',
        'party_id',
        'company_id',
    ];

    public function party()
    {
        return $this->hasMany('App\Domain\Party\Models\Party', 'id', 'party_id');
    }

    public function all_trips()
    {
        return Trip::where('vehicle_id', $this->id)->count();
    }

    public function trips($party_id)
    {
        return Trip::where('vehicle_id', $this->id)->where('party_id', $party_id)->count();
    }

    public function net_weight($party_id)
    {
        return Trip::where('vehicle_id', $this->id)->where('party_id', $party_id)->sum('net_weight');
    }

    public function hsd($party_id)
    {
        return Trip::where('vehicle_id', $this->id)->where('party_id', $party_id)->sum('hsd');
    }

    public function cash_advance($party_id)
    {
        return Trip::where('vehicle_id', $this->id)->where('party_id', $party_id)->sum('cash');
    }
}
