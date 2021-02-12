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

class Trip extends Model implements HasMedia
{
    use HasFactory;
    use MultiTenable;
    use InteractsWithMedia;

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

    public function trip_type()
    {
        return $this->belongsTo('App\Domain\Trip\Models\TripType', 'id', 'trip_type');
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

    /* Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return TripFactory::new();
    }
}
