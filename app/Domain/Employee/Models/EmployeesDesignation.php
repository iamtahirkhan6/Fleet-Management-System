<?php

namespace App\Domain\Employee\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeesDesignation extends Model
{
    use HasFactory;

    public function classification()
    {
        return $this->belongsTo(EmployeeDesignationClassification::class);
    }
}
