<?php

namespace App\Domain\Party\Models;

use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Payment\Models\BankAccount;
use App\Domain\General\Models\PhoneNumber;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Domain\MarketVehicle\Models\MarketVehicle;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Party\Models\Party
 * @property int                                                                                                                                $id
 * @property string                                                                                                                             $name
 * @property string|null                                                                                                                        $pan
 * @property string|null                                                                                                                        $razorpay_contact_id
 * @property int                                                                                                                                $company_id
 * @property \Illuminate\Support\Carbon|null                                                                                                    $created_at
 * @property \Illuminate\Support\Carbon|null                                                                                                    $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|BankAccount[]                                                                        $bankAccounts
 * @property-read int|null                                                                                                                      $bank_accounts_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null                                                                                                                      $media_count
 * @property-read \App\Domain\General\Models\PhoneNumber|null                                                                                   $phoneNumber
 * @property-read \Illuminate\Database\Eloquent\Collection|Trip[]                                                                               $trips
 * @property-read int|null                                                                                                                      $trips_count
 * @property-read \Illuminate\Database\Eloquent\Collection|MarketVehicle[]                                                                      $vehicles
 * @property-read int|null                                                                                                                      $vehicles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Party newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Party newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Party query()
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereRazorpayContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Party extends Model
{
    use HasFactory;
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
        return Trip::wherePartyId($this->id)->sum('total_amount');
    }

    public function totalMaterialTransported()
    {
        return Trip::wherePartyId($this->id)->sum('net_weight');
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = mb_convert_case($name, MB_CASE_TITLE);
    }

    public function setPanAttribute($pan)
    {
        $this->attributes['pan'] = mb_convert_case($pan, MB_CASE_UPPER);
    }
}
