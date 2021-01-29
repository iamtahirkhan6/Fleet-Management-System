<?php

namespace App\Domain\Expense\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExpenseIndividual extends Model
{
    use HasFactory;
    use MultiTenable;

    public function company()
    {
        return $this->belongsTo('App\Domain\Company\Models\Company');
    }
}
