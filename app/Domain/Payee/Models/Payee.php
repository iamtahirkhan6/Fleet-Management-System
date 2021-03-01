<?php

namespace App\Domain\Payee\Models;

use App\Helper\Helper;
use App\Traits\MultiTenable;
use App\Domain\Expense\Models\Expense;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Payee\Models\Payee
 *
 * @property int $id
 * @property string $name
 * @property int $payee_type_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Company\Models\Company $company
 * @property-read \App\Domain\Payee\Models\PayeeType $payeeType
 * @method static \Illuminate\Database\Eloquent\Builder|Payee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee wherePayeeTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Payee extends Model
{
    use HasFactory;
    use MultiTenable;

    public function company()
    {
        return $this->belongsTo('App\Domain\Company\Models\Company');
    }

    public function payeeType()
    {
        return $this->belongsTo('App\Domain\Payee\Models\PayeeType');
    }

    public function totalAmountPaid()
    {
        return Helper::rupee_format(Expense::wherePayeeId($this->id)->sum('amount'));
    }
}
