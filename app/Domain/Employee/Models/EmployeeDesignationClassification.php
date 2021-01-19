<?php

namespace App\Domain\Employee\Models;

use App\Domain\Employee\Models\EmployeesDesignation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Employee\Models\EmployeeDesignationClassification
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|EmployeesDesignation[] $designations
 * @property-read int|null $designations_count
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDesignationClassification whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EmployeeDesignationClassification extends Model
{
    use HasFactory;

    public function designations()
    {
        return $this->hasMany(EmployeesDesignation::class);
    }
}
