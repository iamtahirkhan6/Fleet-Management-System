<?php

namespace App\Domain\Company\Actions;

use App\Domain\Company\Models\Company;
use Illuminate\Support\Facades\Validator;
use Lorisleiva\Actions\Concerns\AsAction;

class AddRazorPayToCompany
{
    use AsAction;

    public function handle($company_id, $input) : bool
    {
        $validator = Validator::make($input, $this->rules());

        if ($validator->fails()) {
            return false;
        } else {
            $company                      = Company::find($company_id);
            $company->use_razorpay        = $input["use_razorpay"];
            $company->razorpay_key_id     = $input["razorpay_key_id"];
            $company->razorpay_key_secret = $input["razorpay_key_secret"];
            $company->save();

            return $company->getChanges() > 0;
        }

    }

    public static function rules($with_prefix = null, $prefix = null) : array
    {
        return [
            $prefix . 'use_razorpay'        => 'required',
            $prefix . 'razorpay_key_id'     => 'required_if:use_razorpay,1',
            $prefix . 'razorpay_key_secret' => 'required_if:use_razorpay,1',
        ];
    }

}
