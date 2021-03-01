<?php


namespace App\Domain\Consignee\Actions;

use Illuminate\Validation\Rule;
use App\Domain\General\Models\Address;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Validator;
use App\Domain\Consignee\Models\Consignee;


class CreateConsignee
{
    use AsAction;

    public function handle($input) : bool
    {
        $validation = Validator::make($input, $this->rules());

        if (!$validation->fails()) {
            $consignee = Consignee::create([
                                               "name"       => $input["name"],
                                               "short_code" => $input["short_code"],
                                               "gstn"       => $input["gstn"],
                                               "pan"        => $input["pan"],
                                               "company_id" => auth()->user()->company_id,
                                           ]);
            if ($input["address_bool"]) {
                $consignee->address()
                    ->save(new Address([
                                           "line_1" => $input["line_1"], "line_2" => $input["line_2"],
                                           "city"   => $input["city"], "zip" => $input["zip"],
                                           "state"  => $input["state"],
                                       ]));
            } else {
                $consignee->save();
            }

            return true;
        } else {
            return false;
        }
    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . 'name'         => 'required',
            $prefix . 'short_code'   => ['required', Rule::unique('consignees', 'short_code')
                ->where(function ($query) {
                    return $query->where('company_id', auth()->user()->company_id);
                })],
            $prefix . 'address_bool' => 'required',
            $prefix . 'line_1'       => 'required_if:address_bool,true',
            $prefix . 'line_2'       => 'nullable',
            $prefix . 'city'         => 'required_if:address_bool,true',
            $prefix . 'zip'          => 'required_if:address_bool,true|nullable|integer|digits:6',
            $prefix . 'state'        => 'required_if:address_bool,true',
            $prefix . 'gstn'         => 'nullable|size:15|alpha_num|unique:consignees,gstn',
            $prefix . 'pan'          => 'nullable|size:10|alpha_num|unique:consignees,pan',
        ];
    }

    public static function validationAttributes($prefix = null)
    {
        return [
            $prefix . 'name'       => 'name',
            $prefix . 'short_code' => 'short code',
            $prefix . 'line_1'     => 'address line 1',
            $prefix . 'line_2'     => 'address line 2',
            $prefix . 'city'       => 'city/town',
            $prefix . 'zip'        => 'zip',
            $prefix . 'state'      => 'state',
            $prefix . 'gstn'       => 'GST number',
            $prefix . 'pan'        => 'pan',
        ];
    }
}
