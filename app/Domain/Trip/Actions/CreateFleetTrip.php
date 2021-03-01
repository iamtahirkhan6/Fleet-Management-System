<?php

namespace App\Domain\Trip\Actions;

use Auth;
use App\Domain\Trip\Models\Trip;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Validator;

class CreateFleetTrip
{
    use AsAction;

    public static function input(array $array) : array
    {
        foreach ($array as $key => $value) {
            $array[$key] = null;
        }

        return $array;
    }

    public function handle($project_id, $input)
    {
        $validator = Validator::make($input, $this->rules(), $this->messages());
        if (!$validator->fails()) {
            $trip             = new Trip();
            $trip->project_id = $project_id;
            $trip->trip_type  = 1;  // 1 = Fleet Vehicle
//            $trip->company_id       = Auth::user()->company_id;
            $trip->date             = $input["date"];
            $trip->challan_serial   = $input["challan_serial"];
            $trip->fleet_vehicle_id = $input["fleet_vehicle_id"];
            $trip->tp_number        = $input["tp_number"];
            $trip->tp_serial        = $input["tp_serial"];
            $trip->gross_weight     = isset($input["gross_weight"]) ? $input["gross_weight"] : null;
            $trip->tare_weight      = isset($input["tare_weight"]) ? $input["tare_weight"] : null;
            $trip->net_weight       = $input["net_weight"];
            $trip->rate             = $input["rate"];
            $trip->fleet_driver_id  = $input["fleet_driver_id"];
            $trip->premium_rate     = isset($input["premium_rate"]) ? $input["premium_rate"] : null;
            $trip->total_amount     = $input["net_weight"] * $input["rate"];
            $trip->loading_done     = 1;
            $trip->created_by       = Auth::id();
            $trip->save();

            return $trip;
        } else {
            false;
        }
    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . 'date'                    => 'required|date',
            $prefix . 'challan_serial'          => 'nullable|alpha_num',
            $prefix . 'fleet_vehicle_id'        => 'required|numeric|exists:fleet_vehicles,id',
            $prefix . 'tp_number'               => 'required|regex:/^\S+$/',
            $prefix . 'tp_serial'               => 'required|numeric|regex:/^\S+$/',
            $prefix . 'gross_weight'            => 'nullable',
            $prefix . 'tare_weight'             => 'nullable',
            $prefix . 'net_weight'              => 'required',
            $prefix . 'rate'                    => 'required|numeric',
            $prefix . 'fleet_driver_id'         => 'required|exists:employees,id',
            $prefix . 'challan_soft_copy'       => 'nullable|image|max:10240',

        ];
    }

    public static function messages($prefix = null) : array
    {
        return [
            $prefix . 'date.required'             => 'Date cannot be empty.',
            $prefix . 'tp_number.required'        => 'Transit Pass (TP) cannot be empty.',
            $prefix . 'tp_number.regex'           => 'Transit Pass (TP) cannot have spaces.',
            $prefix . 'tp_serial.required'        => 'Transit Pass (TP) serial number cannot be empty.',
            $prefix . 'tp_serial.numeric'         => 'Transit Pass (TP) serial number should be numeric.',
            $prefix . 'tp_serial.regex'           => 'Transit Pass (TP) serial number cannot have spaces.',
            $prefix . 'net_weight.required'       => 'Net Weight cannot be empty.',
            $prefix . 'rate.required'             => 'Rate per ton be empty.',
            $prefix . 'fleet_vehicle_id.required' => 'Choose a Vehicle from your fleets.',
            $prefix . 'fleet_driver_id.required'  => 'Choose a Driver from your Employed Drivers.',
            $prefix . 'challan_soft_copy.max'   => 'Challan Copy can not be more than 10mb.',
            $prefix . 'challan_soft_copy.image' => 'Challan Copy should be in image format.',
        ];
    }
}
