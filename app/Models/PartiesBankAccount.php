<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartiesBankAccount extends Model
{
    use HasFactory;

    protected $fillable = ['party_id', 'bank_number', 'iifsc'];
}
