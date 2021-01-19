<?php

namespace App\Models;

use App\Domain\Project\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Sector
 *
 * @property int $id
 * @property string $name
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Mine[] $mines
 * @property-read int|null $mines_count
 * @property-read Sector $sector
 * @method static \Illuminate\Database\Eloquent\Builder|Sector newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sector newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sector query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereVisible($value)
 * @mixin \Eloquent
 */
class Sector extends Model
{
    use HasFactory;

    public function mines()
    {
        return $this->hasMany(Mine::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

}
