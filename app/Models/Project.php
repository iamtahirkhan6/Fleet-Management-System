<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ["material", "consignee", "source", "destination", "company_id", "status"];

    public function Source()
    {
        return $this->hasOne('App\Models\Mine', 'id', 'source');
    }

    public function Destination()
    {
        return $this->hasOne('App\Models\UnloadingPoint', 'id', 'destination');
    }

    public function Consignee()
    {
        return $this->hasOne('App\Models\Consignee', 'id', 'consignee');
    }

    public function Material()
    {
        return $this->hasOne('App\Models\Material', 'id', 'material');
    }

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    public function net_money()
    {
        $net_money = Trip::where('project_id', $this->id)->select(\DB::raw('sum(net_weight * premium_rate) AS net_money'))->first();
        return $net_money->net_money;
    }
}
