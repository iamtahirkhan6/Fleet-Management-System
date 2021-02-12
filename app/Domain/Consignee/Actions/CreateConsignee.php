<?php


namespace App\Domain\Consignee\Actions;

use App\Domain\General\Models\Address;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Validator;
use App\Domain\Consignee\Models\Consignee;


class CreateConsignee
{
    use AsAction;

    public function handle($input)
    {
        $validator = Validator::make($input, $this->rules());

        if (!$validator->fails()) {
            $consignee = Consignee::create(["name" => $input["name"], "gstin" => $input["gstin"], "pan" => $input["pan"]]);
            $consignee->address()->save(new Address(["line_1" => $input["line_1"], "line_2" => $input["line_2"], "city" => $input["city"], "zip" => $input["zip"], "state" => $input["state"]]));
            return true;
        } else {
            return false;
        }
    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . 'name'   => 'required',
            $prefix . 'line_1' => 'required',
            $prefix . 'line_2' => 'nullable',
            $prefix . 'city'   => 'required',
            $prefix . 'zip'    => 'required|integer|digits:6',
            $prefix . 'state'  => 'required',
            $prefix . 'gstin'  => 'nullable|size:15|alpha_num',
            $prefix . 'pan'    => 'nullable|size:10|alpha_num',
        ];
    }

    public static function validationAttributes($prefix = null)
    {
        return [
            $prefix . 'name'   => 'name',
            $prefix . 'line_1' => 'address line 1',
            $prefix . 'line_2' => 'address line 2',
            $prefix . 'city'   => 'city/town',
            $prefix . 'zip'    => 'zip',
            $prefix . 'state'  => 'state',
            $prefix . 'gstin'  => 'GST number',
            $prefix . 'pan'    => 'pan',
        ];
    }
}
