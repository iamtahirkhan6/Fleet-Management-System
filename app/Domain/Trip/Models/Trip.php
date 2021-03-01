<?php

namespace App\Domain\Trip\Models;

use Carbon\Carbon;
use App\Helper\Helper;
use App\Traits\MultiTenable;
use Spatie\MediaLibrary\HasMedia;
use Database\Factories\TripFactory;
use App\Domain\Payment\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Document\Models\Document;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Trip\Models\Trip
 *
 * @property int $id
 * @property mixed $date
 * @property \App\Domain\Trip\Models\TripType $trip_type
 * @property int $project_id
 * @property int $company_id
 * @property string|null $challan_serial
 * @property string $tp_number
 * @property int $tp_serial
 * @property float|null $gross_weight
 * @property float|null $tare_weight
 * @property float $net_weight
 * @property float $rate
 * @property float|null $hsd
 * @property float|null $cash
 * @property string|null $market_vehicle_number
 * @property string|null $party_name
 * @property string|null $party_number
 * @property string|null $driver_name
 * @property string|null $driver_phone_num
 * @property string|null $driver_license_num
 * @property float|null $premium_rate
 * @property float|null $total_amount
 * @property float|null $cash_adv_pct
 * @property float|null $cash_adv_fees
 * @property int|null $tds_sbm_bool
 * @property float|null $tds
 * @property int|null $tax_category_id
 * @property int|null $two_pay
 * @property float|null $final_payable
 * @property int|null $payment_id
 * @property float|null $profit
 * @property int|null $market_vehicle_id
 * @property int|null $fleet_vehicle_id
 * @property int|null $fleet_driver_id
 * @property int|null $party_id
 * @property int|null $agent_id
 * @property int $loading_done
 * @property int $payment_done
 * @property int $completed
 * @property int|null $created_by
 * @property int|null $finished_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Agent\Models\Agent|null $agent
 * @property-read \App\Domain\Consignee\Models\Consignee|null $consignee
 * @property-read \Illuminate\Database\Eloquent\Collection|Document[] $documents
 * @property-read int|null $documents_count
 * @property-read \App\Domain\Fleet\Models\FleetVehicle|null $fleetVehicle
 * @property-read \App\Domain\MarketVehicle\Models\MarketVehicle|null $marketVehicle
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Domain\Party\Models\Party|null $party
 * @property-read Payment|null $payment
 * @property-read \App\Domain\Project\Models\Project|null $project
 * @method static \Illuminate\Database\Eloquent\Builder|Trip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCashAdvFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCashAdvPct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereChallanSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDriverLicenseNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDriverName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDriverPhoneNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFinalPayable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFinishedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFleetDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFleetVehicleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereGrossWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereHsd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereLoadingDone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereMarketVehicleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereMarketVehicleNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereNetWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePartyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePartyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePartyNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePaymentDone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePremiumRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereProfit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTareWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTaxCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTdsSbmBool($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTpNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTpSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTripType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTwoPay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $tds_paid
 * @property int|null $tds_filed
 * @property int $invoice_id
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTdsFiled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereTdsPaid($value)
 */
class Trip extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $casts = [
        'date' => 'date:Y-m-d',
    ];

    public function marketVehicle()
    {
        return $this->hasOne('App\Domain\MarketVehicle\Models\MarketVehicle', 'id', 'market_vehicle_id');
    }

    public function fleetVehicle()
    {
        return $this->hasOne('App\Domain\Fleet\Models\FleetVehicle', 'id', 'fleet_vehicle_id');
    }

    public function consignee()
    {
        return $this->hasOne('App\Domain\Consignee\Models\Consignee');
    }

    public function agent()
    {
        return $this->hasOne('App\Domain\Agent\Models\Agent');
    }

    public function documents()
    {
        return $this->morphMany(Document::class, "documentable");
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'trip_id', 'payment_id');
    }

    public function project()
    {
        return $this->hasOne('App\Domain\Project\Models\Project', 'id', 'project_id');
    }

    public function party()
    {
        return $this->belongsTo('App\Domain\Party\Models\Party');
    }

    public function tripType()
    {
        return $this->belongsTo('App\Domain\Trip\Models\TripType', 'id', 'trip_type');
    }

    public function challanCopy()
    {
        return $this->morphMany(Document::class, 'documentable');
    }

    public function setDateAttribute(string $date)
    {
        $this->attributes['date'] = Carbon::parse($date)->format('Y-m-d');
        return Carbon::parse($date)->format('Y-m-d');
    }

    public function getRateAttribute($rate)
    {
        return Helper::rupee_format($rate);
    }

    public function getHsdAttribute($hsd)
    {
        if (is_null($hsd)) return view('components.svg.red-cross');
        return Helper::rupee_format($hsd);
    }

    public function getCashAttribute($cash)
    {
        if (is_null($cash)) return view('components.svg.red-cross');
        return Helper::rupee_format($cash);
    }

    public function getTotalAmountAttribute($total_amount)
    {
        return Helper::rupee_format($total_amount);
    }

    public function getTwoPayAttribute($two_pay)
    {
        return Helper::rupee_format(isset($two_pay) ? $two_pay : 0);
    }
}
