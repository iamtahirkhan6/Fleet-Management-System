<?php

namespace App\Domain\Project\Models;

use App\Domain\Company\Models\Company;
use App\Domain\Trip\Models\Trip;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Project\Models\Project
 *
 * @property int $id
 * @property string|null $name
 * @property int $material_id
 * @property int $mine_id
 * @property int $unloading_point_id
 * @property int $consignee_id
 * @property int $company_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Company $Company
 * @property-read \App\Models\Consignee|null $Consignee
 * @property-read \App\Models\UnloadingPoint|null $Destination
 * @property-read \App\Models\Material|null $Material
 * @property-read \App\Models\Mine|null $Source
 * @property-read \Illuminate\Database\Eloquent\Collection|Trip[] $trips
 * @property-read int|null $trips_count
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereConsigneeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUnloadingPointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    use HasFactory;

    protected $fillable = ["material_id", "mine_id", "unloading_point_id", "consignee_id", "company_id", "status"];

    public function Source()
    {
        return $this->hasOne('App\Models\Mine', 'id', 'mine_id');
    }

    public function Destination()
    {
        return $this->hasOne('App\Models\UnloadingPoint', 'id', 'unloading_point_id');
    }

    public function Consignee()
    {
        return $this->hasOne('App\Models\Consignee', 'id', 'consignee_id');
    }

    public function Material()
    {
        return $this->hasOne('App\Models\Material', 'id', 'material_id');
    }

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }

    public function trips()
    {
        return $this->hasMany(\App\Domain\Trip\Models\Trip::class);
    }

    public function net_money()
    {
        $net_money = Trip::where('project_id', $this->id)->select(\DB::raw('sum(net_weight * premium_rate) AS net_money'))->first();
        return $net_money->net_money;
    }
}
