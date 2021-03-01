<?php

namespace App\Domain\Employee\Models;

use App\Helper\Helper;
use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use App\Domain\General\Models\PhoneNumber;
use App\Domain\Payment\Models\BankAccount;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Employee\Models\Employee
 *
 * @property int $id
 * @property string|null $name
 * @property float|null $salary
 * @property string|null $email
 * @property int $office_id
 * @property int $company_id
 * @property int $employee_designation_id
 * @property int|null $is_currently_hired
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read BankAccount|null $bankAccount
 * @property-read \App\Domain\Employee\Models\EmployeesDesignation|null $designation
 * @property-read \App\Domain\Office\Models\Office|null $office
 * @property-read PhoneNumber|null $phoneNumber
 * @property-read \Illuminate\Database\Eloquent\Collection|Trip[] $trips
 * @property-read int|null $trips_count
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmployeeDesignationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereIsCurrentlyHired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Employee extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $fillable = [
        'name',
        'salary',
        'email',
        'office_id',
        'company_id',
        'employee_designation_id',
        'profile_photo_path',
        'is_currently_hired',
    ];

    public function office()
    {
        return $this->hasOne('App\Domain\Office\Models\Office', 'id', 'office_id');
    }

    public function designation()
    {
        return $this->hasOne('App\Domain\Employee\Models\EmployeesDesignation', 'id', 'employee_designation_id');
    }

    public function trips()
    {
        return $this->morphMany(Trip::class, 'driverable');
    }

    public function bankAccount()
    {
        return $this->morphOne(BankAccount::class, 'bankable');
    }

    public function phoneNumber()
    {
        return $this->morphOne(PhoneNumber::class, 'phoneable');
    }

    public function profile_photo_url()
    {
        return "https://ui-avatars.com/api/?name=" . $this->name . "&color=7F9CF5&background=EBF4FF";
    }

    public function getSalaryAttribute($salary)
    {
        return Helper::rupee_format($salary);
    }


    // public function getProfile_Photo_PathAttribute()
    // {
    //     if($this->profile_photo_path != null)
    //     {
    //         return asset('/employee_photos/').$this->profile_photo_path;
    //     } else {
    //         return "https://ui-avatars.com/api/?name=". $this->name. "&color=7F9CF5&background=EBF4FF";
    //     }

    // }
}
