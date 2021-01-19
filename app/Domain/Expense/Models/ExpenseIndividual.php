<?php

namespace App\Domain\Expense\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Expense\Models\ExpenseIndividual
 *
 * @property int $id
 * @property string $name
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Company\Models\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseIndividual whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ExpenseIndividual extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo('App\Domain\Company\Models\Company');
    }
}
