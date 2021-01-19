<?php

namespace App\Domain\Trip\Models;

use App\Domain\Trip\Models\Trip;
use App\Models\PartiesBankAccount;
use App\Domain\Party\Models\Party;
use App\Domain\Payment\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Trip\Models\TripPaymentTransaction
 *
 * @property int $id
 * @property int $party_id
 * @property float $amount
 * @property int $parties_bank_account_id
 * @property int $trip_id
 * @property int $status
 * @property int $payment_method_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Party $party
 * @property-read PaymentMethod|null $payment_method
 * @property-read Trip $trip
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction wherePartiesBankAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction wherePartyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction whereTripId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripPaymentTransaction whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
        return $this->hasOne(PartiesBankAccount::class, 'id', 'parties_bank_account_id');
    }

    public function payment_method()
    {
        return $this->hasOne(\App\Domain\Payment\Models\PaymentMethod::class, 'id', 'payment_method_id');
    }


}
