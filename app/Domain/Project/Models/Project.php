<?php

namespace App\Domain\Project\Models;

use DB;
use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use App\Domain\Company\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    use MultiTenable;

    protected array $fillable = [
        "material_id",
        "source_id",
        "destination_id",
        "consignee_id",
        "company_id",
        "status",
    ];

    public function source()
    {
        return $this->hasOne('App\Domain\LoadingPoint\Models\LoadingPoint', 'id', 'source_id');
    }

    public function destination()
    {
        return $this->hasOne('App\Domain\UnloadingPoint\Models\UnloadingPoint', 'id', 'destination_id');
    }

    public function consignee()
    {
        return $this->hasOne('App\Domain\Consignee\Models\Consignee', 'id', 'consignee_id');
    }

    public function material()
    {
        return $this->hasOne('App\Domain\General\Models\Material', 'id', 'material_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    public function transportVolume()
    {
        return Trip::whereProjectId($this->id)->get('net_weight')->sum('net_weight');
    }

    public function workDone()
    {
        $trips = Trip::whereProjectId($this->id)->wherePaymentDone('1')->select(DB::raw('sum(net_weight * premium_rate) AS net_money'))->first();
        return $trips->net_money;
    }

    public function pendingPayments()
    {
        return Trip::whereProjectId($this->id)->wherePaymentDone(0)->get('id')->count();
    }
}
