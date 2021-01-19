<?php

namespace App\Domain\Employee\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Employee\Models\EmployeesAttendance
 *
 * @property int $id
 * @property string $date
 * @property int $employee_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesAttendance whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EmployeesAttendance extends Model
{
    use HasFactory;
}
