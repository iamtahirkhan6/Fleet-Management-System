<?php

namespace App\Domain\Consignee\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Validator;
use App\Domain\Consignee\Models\Consignee;

class UpdateTaxDetailsAction
{
    use AsAction;

    public function handle($consignee_id, $input)
    {
        $validation = Validator::make($input, $this->rules(), [], $this->validationAttributes());
        if (!$validation->fails()) {
            return $this->core($consignee_id, $input);
        } else {
            return false;
        }
    }

    public static function core($consignee_id, array $input) : bool
    {
        if (!is_null($consignee_id) && isset($input)) {
            Consignee::whereId($consignee_id)
                ->update(['gstn' => $input['gstn'], 'pan' => $input['pan']]);

            return true;
        } else {
            return false;
        }
    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . "gstn" => "required|size:15|alpha_num",
            $prefix . "pan"  => "sometimes|nullable|alpha_num|size:10",
        ];
    }

    public static function validationAttributes($prefix = null) : array
    {
        return [
            $prefix . "gstn" => "gstin",
            $prefix . "pan"  => "pan",
        ];
    }
}
