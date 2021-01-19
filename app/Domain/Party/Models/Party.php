<?php

namespace App\Domain\Party\Models;

use App\Models\MarketVehicle;
use App\Domain\Trip\Models\Trip;
use App\Domain\Payment\Models\BankAccount;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Party\Models\Party
 *
 * @property int $id
 * @property string $name
 * @property string|null $pan
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|BankAccount[] $bankAccounts
 * @property-read int|null $bank_accounts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Trip[] $trips
 * @property-read int|null $trips_count
 * @property-read \Illuminate\Database\Eloquent\Collection|MarketVehicle[] $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Party newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Party newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Party query()
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Party extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'pan'];

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

    public function total_business()
    {
        return \App\Domain\Trip\Models\Trip::where('party_id', $this->id)->sum('amount');
    }

    public function total_weight_transported()
    {
        return \App\Domain\Trip\Models\Trip::where('party_id', $this->id)->sum('net_weight');
    }

    // public function trips()
    // {
    //     return Trip::where('party_id', $this->id)->count();
    // }
}
