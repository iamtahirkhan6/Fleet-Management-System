<?php

namespace App\Domain\Invoice\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Invoice\Models\InvoiceType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class InvoiceType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
}
