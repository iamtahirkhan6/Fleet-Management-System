<?php

namespace App\Domain\Fleet\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Fleet\Models\Fleet
 *
 * @property int $id
 * @property string $name
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Fleet\Models\FleetVehicle[] $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Fleet extends Model
{
    use HasFactory;
    use MultiTenable;

    public function vehicles()
    {
        return $this->hasMany(FleetVehicle::class);
    }
}
