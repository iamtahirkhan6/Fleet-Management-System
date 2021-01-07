<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartiesPhoneNumber extends Model
{
    use HasFactory;

    protected $fillable = ['party_id', 'phone_number'];
}
