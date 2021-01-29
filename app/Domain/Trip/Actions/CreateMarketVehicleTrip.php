<?php


namespace App\Domain\Trip\Actions;

use Auth;
use App\Domain\Trip\Models\Trip;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Validator;

class CreateMarketVehicleTrip
{
    use AsAction;

    public function handle($project_id, $input) : bool|Trip
    {
        $validator = Validator::make($input, $this->rules());
        if (!$validator->fails()) {
            $trip                 = new Trip();
            $trip->date           = $input["date"];
            $trip->trip_type      = 1;            // 01 = Market Vehicle, 2 = Owned Vehicle
            $trip->project_id     = $project_id;
            $trip->challan_serial = isset($input["challan_serial"]) ? $input["challan_serial"] : null;
            $trip->tp_number      = $input["tp_number"];
            $trip->tp_serial      = $input["tp_serial"];
            $trip->gross_weight   = isset($input["gross_weight"]) ? $input["gross_weight"] : null;
            $trip->tare_weight    = isset($input["tare_weight"]) ? $input["tare_weight"] : null;
            $trip->net_weight     = isset($input["net_weight"]) ? $input["net_weight"] : null;
            $trip->rate           = $input["rate"];
            $trip->hsd            = isset($input["hsd"]) ? $input["hsd"] : null;
            $trip->cash           = isset($input["cash"]) ? $input["cash"] : null;

            $trip->market_vehicle_number = isset($input["market_vehicle_number"]) ? $input["market_vehicle_number"] : null;
            $trip->party_name            = isset($input["party_name"]) ? $input["party_name"] : null;
            $trip->party_number          = isset($input["party_number"]) ? $input["party_number"] : null;

            $trip->driver_name        = isset($input["driver_name"]) ? $input["driver_name"] : null;
            $trip->driver_phone_num   = isset($input["driver_phone_num"]) ? $input["driver_phone_num"] : null;
            $trip->driver_license_num = isset($input["driver_license_num"]) ? $input["driver_license_num"] : null;

            $trip->premium_rate = isset($input["premium_rate"]) ? $input["premium_rate"] : null;
            $trip->total_amount = $input["net_weight"] * $input["rate"];
            $trip->agent_id     = isset($input["agent_id"]) ? $input["agent_id"] : null;

            $trip->loading_done = 1;
            $trip->created_by   = Auth::id();
            $trip->save();
            return $trip;
        } else {
            return false;
        }
    }

    public static function input(array $array) : array
    {
        foreach ($array as $key => $value) $array[$key] = null;
        return $array;
    }

    public static function messages($prefix = null) : array
    {
        return [
            $prefix . 'date.required'                   => 'Date cannot be empty.',
            $prefix . 'tp_number.required'              => 'Transit Pass (TP) cannot be empty.',
            $prefix . 'tp_number.regex'                 => 'Transit Pass (TP) cannot have spaces.',
            $prefix . 'tp_serial.required'              => 'Transit Pass (TP) serial number cannot be empty.',
            $prefix . 'tp_serial.numeric'               => 'Transit Pass (TP) serial number should be numeric.',
            $prefix . 'tp_serial.regex'                 => 'Transit Pass (TP) serial number cannot have spaces.',
            $prefix . 'net_weight.required'             => 'Net Weight cannot be empty.',
            $prefix . 'rate.required'                   => 'Rate per ton be empty.',
            $prefix . 'party_name.alpha_spaces'         => 'Owner Name is not valid.',
            $prefix . 'party_number.digits'             => 'Owner\'s Phone Number should be of 10 digits only.',
            $prefix . 'market_vehicle_number.required'  => 'Vehicle Number cannot be empty.',
            $prefix . 'market_vehicle_number.alpha_num' => 'Vehicle Number is not valid.',
            $prefix . 'market_vehicle_number.regex'     => 'Vehicle Number cannot have spaces.',
        ];
    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . 'date'                  => 'required|date',
            $prefix . 'challan_serial'        => 'nullable|alpha_num',
            $prefix . 'market_vehicle_number' => 'required|alpha_num|regex:/^\S+$/',
            $prefix . 'tp_number'             => 'required|regex:/^\S+$/',
            $prefix . 'tp_serial'             => 'required|numeric|regex:/^\S+$/',
            $prefix . 'agent_id'              => 'nullable',
            $prefix . 'gross_weight'          => 'nullable',
            $prefix . 'tare_weight'           => 'nullable',
            $prefix . 'net_weight'            => 'required',
            $prefix . 'rate'                  => 'required|numeric',
            $prefix . 'driver_name'           => 'nullable|alpha_spaces',
            $prefix . 'driver_phone_num'      => 'nullable|numeric|digits:10',
            $prefix . 'driver_license_num'    => 'nullable',
            $prefix . 'hsd'                   => 'nullable|numeric',
            $prefix . 'cash'                  => 'nullable|numeric',
            $prefix . 'party_name'            => 'nullable|alpha_spaces',
            $prefix . 'party_number'          => 'nullable|numeric|digits:10',
        ];
    }
}
