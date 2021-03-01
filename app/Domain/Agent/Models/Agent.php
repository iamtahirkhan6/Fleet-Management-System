<?php

namespace App\Domain\Agent\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use App\Domain\General\Models\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Agent\Models\Agent
 *
 * @property int $id
 * @property string $name
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read PhoneNumber|null $phoneNumber
 * @method static \Illuminate\Database\Eloquent\Builder|Agent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Agent extends Model
{
    use MultiTenable;
    /**
     * @return string
     */

    /**
     * @param string $name
     */
    public function setName(string $name) : void
    {
        $this->name = ucfirst($name);
    }

    use HasFactory;

    public function phoneNumber()
    {
        return $this->morphOne(PhoneNumber::class, 'phoneable');
    }


}
