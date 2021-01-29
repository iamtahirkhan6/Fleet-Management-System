<?php

namespace App\Domain\Employee\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeePaymentDetails extends Model
{
    use HasFactory;

    protected $table = "employee_payment_details";

    public function employee()
    {
        return $this->belongsTo('App\Domain\Employee\Models\Employee', 'id');
    }
}
