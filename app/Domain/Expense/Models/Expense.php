<?php

namespace App\Domain\Expense\Models;

use App\Traits\MultiTenable;
use Carbon\Carbon;
use App\Domain\Office\Models\Office;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;
    use MultiTenable;

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = Carbon::parse($value)->format('Y-m-d');
        return;
    }

    public function expenseIndividuals()
    {
        return $this->hasMany(ExpenseIndividual::class);
    }

    public function office()
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
