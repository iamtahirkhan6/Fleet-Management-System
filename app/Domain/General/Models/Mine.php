<?php

namespace App\Domain\General\Models;

use App\Domain\General\Models\Sector;
use App\Domain\Project\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\General\Models\Mine
 *
 * @property int $id
 * @property string $name
 * @property int $sector_id
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\General\Models\Sector $sector
 * @method static \Illuminate\Database\Eloquent\Builder|Mine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mine query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mine whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mine whereSectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mine whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mine whereVisible($value)
 * @mixin \Eloquent
 */
class Mine extends Model
{
    use HasFactory;

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function total_projects()
    {
        return Project::where('mine_id', $this->id)->count();
    }

    public function current_projects()
    {
        return Project::where('mine_id', $this->id)->where('status', 1)->count();
    }
}
