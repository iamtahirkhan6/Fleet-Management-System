<?php

namespace App\Domain\General\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\General\Models\UnloadingPoint
 *
 * @property int $id
 * @property string|null $short_code
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint query()
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UnloadingPoint extends Model
{
    use HasFactory;
}
