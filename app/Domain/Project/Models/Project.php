<?php

namespace App\Domain\Project\Models;

use DB;
use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use App\Domain\Company\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Project\Models\Project
 *
 * @property int $id
 * @property string $name
 * @property int $material_id
 * @property int $loading_point_id
 * @property int $unloading_point_id
 * @property int $consignee_id
 * @property int $company_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Company $company
 * @property-read \App\Domain\Consignee\Models\Consignee|null $consignee
 * @property-read \App\Domain\LoadingPoint\Models\LoadingPoint|null $loadingPoint
 * @property-read \App\Domain\General\Models\Material|null $material
 * @property-read \Illuminate\Database\Eloquent\Collection|Trip[] $trips
 * @property-read int|null $trips_count
 * @property-read \App\Domain\UnloadingPoint\Models\UnloadingPoint|null $unloadingPoint
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereConsigneeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLoadingPointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUnloadingPointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $fillable = [
        "material_id",
        "loading_point_id",
        "unloading_point_id",
        "consignee_id",
        "company_id",
        "status",
    ];

    public function loadingPoint()
    {
        return $this->hasOne('App\Domain\LoadingPoint\Models\LoadingPoint', 'id', 'loading_point_id');
    }

    public function unloadingPoint()
    {
        return $this->hasOne('App\Domain\UnloadingPoint\Models\UnloadingPoint', 'id', 'unloading_point_id');
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
