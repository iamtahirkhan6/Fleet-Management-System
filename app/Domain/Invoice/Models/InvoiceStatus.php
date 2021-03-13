<?php

namespace App\Domain\Invoice\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Invoice\Models\InvoiceStatus
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $desc
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceStatus whereDesc($value)
 */
class InvoiceStatus extends Model
{
    use HasFactory;
}
