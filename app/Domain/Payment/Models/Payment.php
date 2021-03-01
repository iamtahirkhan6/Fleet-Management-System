<?php

namespace App\Domain\Payment\Models;

use App\Helper\Helper;
use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Payment\Models\Payment
 *
 * @property int $id
 * @property float $amount
 * @property int $bank_account_id
 * @property int $payment_method_id
 * @property int $payment_status_id
 * @property float|null $fees
 * @property string|null $remarks
 * @property string|null $utr_number
 * @property string|null $razorpay_payout_id
 * @property int $company_id
 * @property int|null $trip_id
 * @property int|null $created_by
 * @property int|null $finished_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Payment\Models\BankAccount|null $bankAccount
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Domain\Payment\Models\PaymentMethod|null $method
 * @property-read \App\Domain\Payment\Models\PaymentStatus|null $status
 * @property-read Trip|null $trip
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereBankAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereFinishedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereRazorpayPayoutId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTripId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUtrNumber($value)
 * @mixin \Eloquent
 */
class Payment extends Model
{
    use HasFactory;
    use MultiTenable;

    /*-- Define Relationships --*/

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

    /*-- Define Functions --*/

    public function getAmountAttribute($amount)
    {
        return Helper::rupee_format($amount);
    }

    public function type()
    {
        return (isset($this->trip_id)) ? "Market Vehicle Payment" : "Other";
    }
}
