<?php

namespace App\Domain\Fleet\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Fleet\Models\FleetTripCatcher
 *
 * @property int $id
 * @property string $vehicleno
 * @property string $etpno
 * @property string|null $source
 * @property string|null $destination
 * @property string|null $starttime
 * @property string|null $pollingtime
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher query()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereEtpno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher wherePollingtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereStarttime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetTripCatcher whereVehicleno($value)
 * @mixin \Eloquent
 */
class FleetTripCatcher extends Model
{
    use HasFactory;

    protected $fillable = ['vehicleno', 'etpno', 'source', 'destination', 'starttime', 'pollingtime'];

}
