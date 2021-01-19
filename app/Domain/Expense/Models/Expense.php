<?php

namespace App\Domain\Expense\Models;

use App\Domain\Expense\Models\ExpenseCategory;
use Carbon\Carbon;
use App\Domain\Expense\Models\ExpenseIndividual;
use App\Domain\Office\Models\Office;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Expense\Models\Expense
 *
 * @property int $id
 * @property string $date
 * @property int $amount
 * @property string|null $remark
 * @property int $expense_category_id
 * @property int $expense_individual_id
 * @property int $office_id
 * @property int $company_id
 * @property int $payment_method_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read ExpenseCategory $category
 * @property-read \Illuminate\Database\Eloquent\Collection|ExpenseIndividual[] $expenseIndividuals
 * @property-read int|null $expense_individuals_count
 * @property-read Office $office
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpenseCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpenseIndividualId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Expense extends Model
{
    use HasFactory;

    public function setDateAttribute($value)
    {
        // $this->attributes['date'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
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
