<?php

namespace App\Domain\Employee\Models;

use App\Domain\Employee\Models\EmployeeDesignationClassification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Employee\Models\EmployeesDesignation
 *
 * @property int $id
 * @property string $name
 * @property int $emp_desig_class_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read EmployeeDesignationClassification $classification
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation whereEmpDesigClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeesDesignation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EmployeesDesignation extends Model
{
    use HasFactory;

    public function classification()
    {
        return $this->belongsTo(EmployeeDesignationClassification::class);
    }
}
