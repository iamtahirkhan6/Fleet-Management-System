<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripDocuments extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'doc_category_id',
        'doc_path'
    ];
}
