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
use App\Domain\Payment\Models\BankAccount;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Company\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string $short_code
 * @property string|null $gstn
 * @property string|null $pan
 * @property int $use_razorpay
 * @property string|null $razorpay_key_id
 * @property string|null $razorpay_key_secret
 * @property string|null $razorpay_account_number
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Address|null $address
 * @property-read \Illuminate\Database\Eloquent\Collection|Agent[] $agents
 * @property-read int|null $agents_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Employee[] $employees
 * @property-read int|null $employees_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Fleet[] $fleets
 * @property-read int|null $fleets_count
 * @property-read User|null $manager
 * @property-read \Illuminate\Database\Eloquent\Collection|Office[] $offices
 * @property-read int|null $offices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Project[] $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereGstn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRazorpayAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRazorpayKeyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRazorpayKeySecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUseRazorpay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
 * @mixin \Eloquent
 */

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'short_code',
        'gstn',
        'pan',
        'use_razorpay',
        'razorpay_key_id',
        'razorpay_key_secret',
        'razorpay_account_number',
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

    public function bankAccount()
    {
        return $this->morphOne(BankAccount::class, 'bankable');
    }

    public function setGstnAttribute($gstn)
    {
        $this->attributes['gstn'] = strtoupper($gstn);
    }
}
