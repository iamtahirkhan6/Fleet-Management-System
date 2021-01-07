<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'pan'];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function total_vehicles()
    {
        return Vehicle::where('party_id', $this->id)->count();
    }

    public function total_bank_accounts()
    {
        return PartiesBankAccount::where('party_id', $this->id)->count();
    }

    public function total_trips()
    {
        return Trip::where('party_id', $this->id)->count();
    }

    public function total_business()
    {
        return Trip::where('party_id', $this->id)->sum('total_amount');
    }

    public function total_weight_transported()
    {
        return Trip::where('party_id', $this->id)->sum('net_weight');
    }

    public function trips()
    {
        return Trip::where('party_id', $this->id)->count();
    }
}
