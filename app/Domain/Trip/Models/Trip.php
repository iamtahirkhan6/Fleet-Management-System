<?php

namespace App\Domain\Trip\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Trip\Models\Trip
 *
 * @property int $id
 * @property string $date
 * @property string|null $challan_serial
 * @property int $vehicle_id
 * @property int $project_id
 * @property string $tp_number
 * @property int $tp_serial
 * @property float|null $gross_weight
 * @property float|null $tare_weight
 * @property float $net_weight
 * @property float $rate
 * @property float|null $premium_rate
 * @property int $amount
 * @property int|null $hsd
 * @property int|null $cash
 * @property float|null $cash_adv_pct
 * @property float|null $cash_adv_fees
 * @property int|null $tds_sbm_bool
 * @property int $tax_category_id
 * @property float|null $tds
 * @property int|null $two_pay
 * @property float $final_payable
 * @property int $step_loading
 * @property int $step_payment
 * @property int $company_id
 * @property int $party_id
 * @property int $agent_id
 * @property string|null $driver_type
 * @property int|null $driver_id
 * @property int|null $trip_payment_transaction_id
 * @property int|null $created_by
 * @property int|null $finished_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Agent|null $agent
 * @property-read \App\Models\Consignee|null $consignee
 * @property-read Model|\Eloquent $driverable
 * @property-read \App\Domain\Project\Models\Project|null $project
 * @property-write mixed $loading_date
 * @property-read \App\Domain\Trip\Models\TripPaymentTransaction|null $txn
 * @property-read \App\Models\MarketVehicle|null $vehicle
 * @method static \Illuminate\Database\Eloquent\Builder|Trip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCashAdvFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCashAdvPct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereChallanSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDriverType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFinalPayable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFinishedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereGrossWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereHsd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereNetWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePartyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePremiumRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereStepLoading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereStepPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTareWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTaxCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTdsSbmBool($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTpNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTpSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTripPaymentTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTwoPay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereVehicleId($value)
 * @mixin \Eloquent
 */
class Trip extends Model
{
    use HasFactory;

    public function vehicle()
    {
        return $this->hasOne('App\Models\MarketVehicle', 'id', 'vehicle_id');
    }

    public function consignee()
    {
        return $this->hasOne('App\Models\Consignee');
    }

    public function driverable()
    {
        return $this->morphTo();
    }

    public function agent()
    {
        return $this->hasOne('App\Models\Agent');
    }

    public function challan_doc()
    {
        return $this->hasMany('App\Models\TripDocuments');
    }

    public function project()
    {
        return $this->hasOne('App\Domain\Project\Models\Project', 'id', 'project_id');
    }

    public function txn()
    {
        return $this->hasOne('App\Domain\Trip\Models\TripPaymentTransaction');
    }

    public function get_loading_date()
    {
        return Carbon::createFromFormat("Y-m-d", $this->date)->format('d F, Y');
    }

    public function setLoadingDateAttribute($value)
    {
        $this->attributes['loading_date'] = Carbon::parse($value)->format('Y-m-d');
        return ;
    }


}
