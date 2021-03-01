<?php

namespace App\Domain\Company\Actions;

use App\Domain\Company\Models\Company;
use Illuminate\Support\Facades\Validator;
use Lorisleiva\Actions\Concerns\AsAction;

class AddOrUpdateRazorPayToCompany
{
    use AsAction;

    public function handle($company_id, $input, $company_model = null) : bool
    {
        $validator = Validator::make($input, $this->rules(), [], $this->validationAttributes());

        if (!$validator->fails()) {
            if (is_null($company_model)) {
                $company_model = Company::find($company_id);
            }

            return $this->core($company_id, $input, $company_model);
        } else {
            return false;
        }
    }

    public static function core($company_id, $input, $company_model = null)
    {
        if (isset($company_id) && isset($input)) {
            if (is_null($company_model)) {
                $company_model = Company::find($company_id);
            }

            return $company_model
                ->update(
                    [
                        'use_razorpay'            => (isset($input['use_razorpay'])) ? $input['use_razorpay'] : 0,
                        'razorpay_key_id'         => (isset($input['razorpay_key_id'])) ? $input['razorpay_key_id'] : null,
                        'razorpay_key_secret'     => (isset($input['razorpay_key_secret'])) ? $input['razorpay_key_secret'] : null,
                        'razorpay_account_number' => (isset($input['razorpay_account_number'])) ? $input['razorpay_account_number'] : null,
                    ]
                );
        } else {
            return false;
        }
    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . 'use_razorpay'            => 'required',
            $prefix . 'razorpay_key_id'         => 'required_if:use_razorpay,1',
            $prefix . 'razorpay_key_secret'     => 'required_if:use_razorpay,1',
            $prefix . 'razorpay_account_number' => 'required_if:use_razorpay,1',
        ];
    }

    public static function validationAttributes($prefix = null) : array
    {
        return [
            $prefix . 'use_razorpay'            => 'enable razorpay',
            $prefix . 'razorpay_key_id'         => 'razorpay key id',
            $prefix . 'razorpay_key_secret'     => 'razorpay key secret',
            $prefix . 'razorpay_account_number' => 'razorpay account number',
        ];
    }

}
