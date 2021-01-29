<?php

namespace App\Domain\Project\Models;

use App\Traits\MultiTenable;
use DB;
use App\Domain\Trip\Models\Trip;
use App\Domain\Company\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $fillable = [
        "material_id",
        "mine_id",
        "unloading_point_id",
        "consignee_id",
        "company_id",
        "status",
    ];

    public function source()
    {
        return $this->hasOne('App\Domain\General\Models\Mine', 'id', 'mine_id');
    }

    public function destination()
    {
        return $this->hasOne('App\Domain\General\Models\UnloadingPoint', 'id', 'unloading_point_id');
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

    public function net_money()
    {
        $net_money = Trip::where('project_id', $this->id)->select(DB::raw('sum(net_weight * premium_rate) AS net_money'))->first();
        return $net_money->net_money;
    }
}
