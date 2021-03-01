<?php

namespace App\Domain\UnloadingPoint\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\UnloadingPoint\Models\UnloadingPoint
 *
 * @property int $id
 * @property string $name
 * @property string $short_code
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint query()
 * @method static \Illuminate\Database\Eloquent\Builder|UnloadingPoint whereCompanyId($value)
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
    use MultiTenable;

    protected $table = "unloading_points";

    protected $fillable = ['name', 'short_code', 'company_id'];

    public function setShortCodeAttribute($short_code)
    {
        $this->attributes['short_code'] = strtoupper($short_code);
    }
}
