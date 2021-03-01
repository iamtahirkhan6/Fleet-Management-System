<?php

namespace App\Domain\LoadingPoint\Models;

use App\Traits\MultiTenable;
use App\Domain\Project\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\LoadingPoint\Models\LoadingPoint
 *
 * @property int $id
 * @property string $name
 * @property string $short_code
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadingPoint whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class LoadingPoint extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $table = "loading_points";

    protected $fillable = ['name', 'short_code', 'company_id'];

    public function totalProjects()
    {
        return Project::where('loading_point_id', $this->id)->count();
    }

    public function currentProjects()
    {
        return Project::where('loading_point_id', $this->id)->whereStatus(1)->count();
    }

    public function setShortCodeAttribute($short_code)
    {
        $this->attributes['short_code'] = strtoupper($short_code);
    }

}
