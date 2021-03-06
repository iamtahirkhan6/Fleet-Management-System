<?php

namespace App\Domain\Expense\Models;

use Carbon\Carbon;
use App\Traits\MultiTenable;
use Spatie\MediaLibrary\HasMedia;
use App\Domain\Payee\Models\Payee;
use App\Domain\Office\Models\Office;
use App\Domain\Document\Models\Document;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * App\Domain\Expense\Models\Expense
 *
 * @property int                                             $id
 * @property string                                          $date
 * @property int                                             $amount
 * @property string|null                                     $remark
 * @property int                                             $expense_category_id
 * @property int                                             $payee_id
 * @property int                                             $office_id
 * @property int                                             $payment_method_id
 * @property int                                             $company_id
 * @property \Illuminate\Support\Carbon|null                 $created_at
 * @property \Illuminate\Support\Carbon|null                 $updated_at
 * @property-read \App\Domain\Expense\Models\ExpenseCategory $category
 * @property-read Office                                     $office
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpenseCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense wherePayeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read Payee                                      $payee
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 */

class Expense extends Model
{
    use MultiTenable;

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = Carbon::parse($value)
            ->format('Y-m-d');
    }

    public function setAmountAttribute($value)
    {
        $this->attributes['amount'] = round($value, '2');
    }

    public function payee()
    {
        return $this->belongsTo(Payee::class);
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
        return $this->morphMany(Document::class, 'documentable');
    }
}
