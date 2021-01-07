<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    // Allow Mass Assignment
    protected $fillable = ['number', 'party_id'];

    public function party()
    {
        return $this->hasMany('App\Models\Party', 'id', 'party_id');
    }

    public function all_trips()
    {
        return Trip::where('vehicle_number', $this->id)->count();
    }

    public function trips($party_id)
    {
        return Trip::where('vehicle_number', $this->id)
        ->where('party_id', $party_id)
        ->count();
    }

    public function net_weight($party_id)
    {
        return Trip::where('vehicle_number', $this->id)
        ->where('party_id', $party_id)
        ->sum('net_weight');
    }
    
    public function hsd($party_id)
    {
        return Trip::where('vehicle_number', $this->id)
        ->where('party_id', $party_id)
        ->sum('hsd_amount');
    }

    public function cash_advance($party_id)
    {
        return Trip::where('vehicle_number', $this->id)
        ->where('party_id', $party_id)
        ->sum('cash_amount_given');
    }
}
