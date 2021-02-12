<?php

namespace App\Domain\Employee\Models;

use App\Helper\Helper;
use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use App\Domain\General\Models\PhoneNumber;
use App\Domain\Payment\Models\BankAccount;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    use MultiTenable;

    protected array $fillable = [
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
