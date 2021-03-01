<?php

namespace App\Domain\Consignee\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Validator;
use App\Domain\Consignee\Models\Consignee;

class UpdateNameAction
{
    use AsAction;

    public function handle($input, $consignee_id, $consignee_model = null)
    {
        $validation = Validator::make($input, $this->rules(), [], $this->validationAttributes());
        if(!$validation->fails())
        {
            return $this->core($input, $consignee_id, $consignee_model);
        } else {
            return false;
        }
    }

    public static function core($input, $consignee_id, $consignee_model = null)
    {
        if(is_null($consignee_model))
        {
            $consignee_model = Consignee::find($consignee_id);
        }

        if(isset($input))
        {
            return $consignee_model->update(['name' => $input["name"], 'short_code' => $input['short_code'], 'trade_name' => $input["trade_name"]]);
        }

        return false;
    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . 'name'       => 'required',
            $prefix . 'short_code' => 'required',
            $prefix . 'trade_name' => 'nullable',
        ];
    }

    public static function validationAttributes($prefix = null) : array
    {
        return [
            $prefix . 'name'       => 'consignee name',
            $prefix . 'short_code' => 'unique short code',
            $prefix . 'trade_name' => 'registered trade name',
        ];
    }
}
