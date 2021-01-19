<?php
namespace App\Domain\Company\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Validator;
use App\Domain\Company\Models\Company;

class AddRazorPayToCompany
{
    use AsAction;

    public static function rules() : array
    {
        return [
            'use_razorpay'  => 'required',
            'razorpay_key_id' => 'required_if:use_razorpay,1',
            'razorpay_key_secret' => 'required_if:use_razorpay,1'
        ];
    }

    public function handle($company_id, $input) : bool
    {
        $validator = Validator::make($input, $this->rules());

        if ($validator->fails()){
            return false;
        } else {
            $company = Company::whereId($company_id)
                        ->update([
                                'use_razorpay'  => $input["use_razorpay"],
                                'razorpay_key_id' => $input["razorpay_key_id"],
                                'razorpay_key_secret' => $input["razorpay_key_secret"]
                            ]);
            return true;
        }
    }

}
