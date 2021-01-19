<?php

namespace App\Domain\Expense\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Expense\Models\ExpenseCategoryType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategoryType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ExpenseCategoryType extends Model
{
    use HasFactory;
}
