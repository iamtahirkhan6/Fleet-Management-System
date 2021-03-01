<?php

namespace App\Domain\General\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domain\General\Actions\FetchGstDetails;

/**
 * App\Domain\General\Models\GstDetails
 *
 * @property int $id
 * @property string $gstn
 * @property string|null $legal_name
 * @property string|null $trade_name
 * @property string|null $taxpayer_type
 * @property string|null $reg_date
 * @property string|null $state_code
 * @property string|null $nature
 * @property string|null $jurisdiction
 * @property string|null $business_type
 * @property string|null $last_update
 * @property string|null $address_1
 * @property string|null $address_2
 * @property string|null $pin
 * @property string|null $state
 * @property string|null $city
 * @property string|null $district
 * @property string|null $status
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereBusinessType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereGstn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereJurisdiction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereLastUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereLegalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereNature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails wherePin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereRegDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereStateCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereTaxpayerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GstDetails whereTradeName($value)
 * @mixin \Eloquent
 */

class GstDetails extends Model
{
    protected $fillable = [ "gstn", "legal_name", "trade_name", "taxpayer_type", "reg_date", "state_code", "nature", "jurisdiction", "business_type", "last_update", "address_1", "address_2", "pin", "state", "city", "district", "status"];
    public $timestamps = false;

    public static function create(array $attributes = [])
    {
        $gst_details = GstDetails::whereGstn($attributes['gstn'])->get();
        if($gst_details->count() > 0)
        {
            return $gst_details->first();
        } else {
            return FetchGstDetails::fetchFromApi($attributes['gstn']);
        }
    }

    public function setGstnAttribute($gstn)
    {
        $this->attributes['gstn'] = strtoupper($gstn);
    }
}
