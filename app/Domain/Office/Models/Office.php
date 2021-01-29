<?php

namespace App\Domain\Office\Models;

use App\Traits\MultiTenable;
use App\Domain\Expense\Models\Expense;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Employee\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Office extends Model
{
    use HasFactory;
    use MultiTenable;

    public function company()
    {
        return $this->belongsTo('App\Domain\Company\Models\Company');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function total_employees()
    {
        return Employee::where('office_id', $this->id)->count();
    }
}
