<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['salary', 'office_id', 'employee_designation', 'user_id', 'payment_details'];

    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User', 'user_id');
    // }

    public function office()
    {
        return $this->hasOne('App\Models\Office', 'id', 'office_id');
    }

    public function designation()
    {
        return $this->hasOne('App\Models\EmployeesDesignation', 'id', 'employee_designation');
    }

    public function payment()
    {
        return $this->hasOne('App\Models\Employee_PaymentDetails', 'id', 'payment_details');
    }

    public function profile_photo_url()
    {
        return "https://ui-avatars.com/api/?name=". $this->name. "&color=7F9CF5&background=EBF4FF";
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