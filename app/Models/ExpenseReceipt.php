<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseReceipt extends Model
{
    use HasFactory;

    protected $fillable = ['expense_id', 'doc_path'];

    public function expense()
    {
        return $this->belongsTo(Expense::class, 'expense_id');
    }
}
