<?php

namespace App\Domain\Fleet\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Fleet\Models\FleetDailyInspection
 *
 * @property int $air_filter
 * @property float|null $air_filter_charge
 * @property int $grease
 * @property float|null $grease_charge
 * @property int $tyre_repair
 * @property float|null $tyre_repair_charge
 * @property int $urea
 * @property float|null $urea_amount
 * @property float|null $urea_charge
 * @property int $misc
 * @property string|null $misc_charge
 * @property float|null $misc_remark
 * @property float|null $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection query()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereAirFilter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereAirFilterCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereGrease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereGreaseCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereMisc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereMiscCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereMiscRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereTyreRepair($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereTyreRepairCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereUrea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereUreaAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDailyInspection whereUreaCharge($value)
 * @mixin \Eloquent
 */
class FleetDailyInspection extends Model
{
    use HasFactory;
}
