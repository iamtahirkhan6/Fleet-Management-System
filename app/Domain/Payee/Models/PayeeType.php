<?php

namespace App\Domain\Payee\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Payee\Models\PayeeType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayeeType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PayeeType extends Model
{
    use HasFactory;

    protected $fillable = ["name"];
}
