<?php

namespace App\Domain\Company\Models;

use App\Models\User;
use App\Domain\Fleet\Models\Fleet;
use App\Domain\Agent\Models\Agent;
use App\Domain\Office\Models\Office;
use App\Domain\Project\Models\Project;
use App\Domain\General\Models\Address;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Employee\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected array $fillable = [
        'id',
        'name',
        'short_name',
        'gstin',
        'pan',
        'razorpay_key_id',
        'razorpay_key_secret',
        'user_id',
        'created_at',
        'updated_at',
    ];

    public function address()
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function manager()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function offices()
    {
        return $this->hasMany(Office::class, 'company_id', 'id');
    }

    public function fleets()
    {
        return $this->hasMany(Fleet::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'company_id', 'id');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'company_id', 'id');
    }

    public function agents()
    {
        return $this->hasMany(Agent::class, 'company_id');
    }
}
