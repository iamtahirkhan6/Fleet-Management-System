<?php

namespace App\Domain\Employee\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Employee\Models\EmployeePaymentDetails
 *
 * @property-read \App\Domain\Employee\Models\Employee $employee
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeePaymentDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeePaymentDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeePaymentDetails query()
 * @mixin \Eloquent
 */
class EmployeePaymentDetails extends Model
{
    use HasFactory;

    protected $table = "employee_payment_details";

    public function employee()
    {
        return $this->belongsTo('App\Domain\Employee\Models\Employee', 'id');
    }
}
