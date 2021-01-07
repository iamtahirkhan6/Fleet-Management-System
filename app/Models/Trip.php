<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    public function vehicle()
    {
        return $this->hasOne('App\Models\Vehicle', 'id', 'vehicle_number');
    }

    public function consignee()
    {
        return $this->hasOne('App\Models\Consignee', 'id', 'consignee_id');
    }

    public function driver()
    {
        return $this->hasOne('App\Models\Driver', 'id', 'driver_id');
    }

    public function agent()
    {
        return $this->hasOne('App\Models\Agent' , 'id', 'agent_id');
    }

    public function challan_doc()
    {
        return $this->hasMany('App\Models\TripDocuments', 'id', 'challan_doc_id');
    }

    public function project()
    {
        return $this->hasOne('App\Models\Project', 'id', 'project_id');
    }

    public function txn()
    {
        return $this->hasOne('App\Models\TripPaymentTransaction', 'id', 'transaction_id');
    }
    
    public function get_loading_date()
    {
        return Carbon::createFromFormat("Y-m-d", $this->loading_date)->format('d F, Y');
    }

    public function rate()
    {
        return "₹".number_format($this->rate);
    }

    public function setLoadingDateAttribute($value)
    {
        $this->attributes['loading_date'] = Carbon::parse($value)->format('Y-m-d');
        return ;
    }

    
}
