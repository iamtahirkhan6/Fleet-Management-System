<?php

namespace App\Domain\Company\Models;

use App\Domain\Employee\Models\Employee;
use App\Domain\Office\Models\Office;
use App\Domain\Project\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Company\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string $short_name
 * @property string|null $address
 * @property string|null $city
 * @property string|null $state
 * @property string|null $gstin
 * @property string|null $pan
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Office[] $offices
 * @property-read int|null $offices_count
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereGstin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
 * @mixin \Eloquent
 * @property string|null $razorpay_key_id
 * @property string|null $razorpay_key_secret
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRazorpayKeyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRazorpayKeySecret($value)
 */
class Company extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'short_name', 'address', 'city', 'state', 'gstin', 'pan', 'razorpay_key_id', 'razorpay_key_secret', 'user_id', 'created_at', 'updated_at'];

    public function owner()
    {
        return $this->belongsTo('user_id');
    }

    public function offices()
    {
        return $this->hasMany(\App\Domain\Office\Models\Office::class);
    }

    public function totalProjects()
    {
        return Project::where('company_id', $this->id)->count();
    }

    public function totalOffices()
    {
        return \App\Domain\Office\Models\Office::where('company_id', $this->id)->count();
    }

    public function totalEmployees()
    {
        return \App\Domain\Employee\Models\Employee::where('office_id', Office::where('company_id', $this->id)->first()->id)->count();
    }
}
