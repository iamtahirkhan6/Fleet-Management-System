<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;

    public function setDateAttribute($value)
    {
        // $this->attributes['date'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
        $this->attributes['date'] = Carbon::parse($value)->format('Y-m-d');
        return;
    }

    public function expense_individual()
    {
        return $this->hasMany(ExpenseIndividual::class);
    }

    public function Office()
    {
        return $this->belongsTo(Office::class);
    }

    public function category()
    {
        return $this->belongsTo(ExpenseCategory::class, 'expense_category_id');
    }

    public function payment_method()
    {
        $this->hasOne(ExpenseCategory::class);
    }

    public function receipt()
    {
        return $this->hasMany(ExpenseReceipt::class);
    }
}
