<?php

namespace App\Domain\Payment\Models;

use Eloquent;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Payment\Models\TaxCategory
 *
 * @property int $id
 * @property string $section
 * @property float $percentage
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TaxCategory newModelQuery()
 * @method static Builder|TaxCategory newQuery()
 * @method static Builder|TaxCategory query()
 * @method static Builder|TaxCategory whereCreatedAt($value)
 * @method static Builder|TaxCategory whereId($value)
 * @method static Builder|TaxCategory wherePercentage($value)
 * @method static Builder|TaxCategory whereSection($value)
 * @method static Builder|TaxCategory whereUpdatedAt($value)
 * @mixin Eloquent
 */
class TaxCategory extends Model
{
    use HasFactory;
}
