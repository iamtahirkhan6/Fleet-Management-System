<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverNumber extends Model
{
    use HasFactory;

     // Allow Mass Assignment
    protected $fillable = ['driver_id', 'phone_number'];
}
