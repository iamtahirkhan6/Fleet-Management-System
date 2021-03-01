<?php

namespace App\Domain\Trip\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Trip\Models\TripType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TripType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TripType query()
 * @method static \Illuminate\Database\Eloquent\Builder|TripType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TripType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TripType extends Model
{
    protected $fillable = [
        "id",
        "name",
    ];
}
