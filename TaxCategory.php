<?php

namespace App\Domain\Payment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Payment\Models\TaxCategory
 *
 * @property int $id
 * @property string $section
 * @property float $percentage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory wherePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory whereSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TaxCategory extends Model
{
    use HasFactory;
}
