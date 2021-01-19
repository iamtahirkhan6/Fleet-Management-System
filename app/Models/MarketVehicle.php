<?php

namespace App\Models;

use App\Domain\Trip\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\MarketVehicle
 *
 * @property int $id
 * @property string $number
 * @property int $party_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Party\Models\Party[] $party
 * @property-read int|null $party_count
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle wherePartyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketVehicle whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MarketVehicle extends Model
{
    use HasFactory;

    // Allow Mass Assignment
    protected $fillable = ['number', 'party_id'];

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
        return Trip::where('vehicle_id', $this->id)
        ->where('party_id', $party_id)
        ->count();
    }

    public function net_weight($party_id)
    {
        return Trip::where('vehicle_id', $this->id)
        ->where('party_id', $party_id)
        ->sum('net_weight');
    }

    public function hsd($party_id)
    {
        return Trip::where('vehicle_id', $this->id)
        ->where('party_id', $party_id)
        ->sum('hsd');
    }

    public function cash_advance($party_id)
    {
        return \App\Domain\Trip\Models\Trip::where('vehicle_id', $this->id)
        ->where('party_id', $party_id)
        ->sum('cash');
    }
}
