<?php

namespace App\Domain\Payment\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Payment\Models\BankAccount
 *
 * @property int $id
 * @property string|null $account_name
 * @property string $account_number
 * @property string $ifsc_code
 * @property string $bankable_type
 * @property int $bankable_id
 * @property string|null $fund_account_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $bankable
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereAccountName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereBankableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereBankableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereFundAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereIfscCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BankAccount extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $fillable = [
        'account_name',
        'account_number',
        'ifsc_code',
    ];

    public function bankable()
    {
        return $this->morphTo();
    }
}
