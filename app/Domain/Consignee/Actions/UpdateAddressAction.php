<?php

namespace App\Domain\Consignee\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Validator;
use App\Domain\Consignee\Models\Consignee;

class UpdateAddressAction
{
    use AsAction;

    public function handle($consignee_model, $input)
    {
        $validation = Validator::make($input, $this->rules(), [], $this->validationAttributes());
        if (!$validation->fails()) {
            return $this->core($consignee_model, $input);
        } else {
            return false;
        }
    }

    public static function core(Consignee $consignee_model, array $input) : bool
    {
        if (!is_null($consignee_model) && isset($input)) {
            $consignee_model->address()
                ->updateOrCreate(["addressable_id" => $consignee_model->id, "addressable_type" => "App\Domain\Consignee\Models\Consignee"],[
                                     "line_1"   => $input["line_1"],
                                     "line_2"   => $input["line_2"],
                                     "city"     => $input["city"],
                                     "district" => $input["district"],
                                     "state"    => $input["state"],
                                     "zip"      => $input["zip"],
                                 ]);
            return true;
        } else {
            return false;
        }
    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . 'line_1'   => 'required',
            $prefix . 'line_2'   => 'nullable',
            $prefix . 'city'     => 'required',
            $prefix . 'district' => 'nullable',
            $prefix . 'state'    => 'required',
            $prefix . 'zip'      => 'required|integer|digits:6',
        ];
    }

    public static function validationAttributes($prefix = null) : array
    {
        return [
            $prefix . 'line_1' => 'address 1',
            $prefix . 'line_2' => 'address 2',
            $prefix . 'city'   => 'city',
            $prefix . 'zip'    => 'postal code',
            $prefix . 'state'  => 'state',
        ];
    }
}
