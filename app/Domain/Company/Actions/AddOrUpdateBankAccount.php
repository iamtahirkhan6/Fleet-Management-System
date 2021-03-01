<?php

namespace App\Domain\Company\Actions;

use App\Domain\Company\Models\Company;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Validator;

class AddOrUpdateBankAccount
{
    use AsAction;

    public function handle($company_id, $input, $company_model = null)
    {
        $validation = Validator::make($input, $this->rules(), [], $this->validationAttributes());
        if (!$validation->fails()) {
            return $this->core($company_id, $input, $company_model);
        } else {
            return false;
        }
    }

    public static function core($company_id, array $input, $company_model = null) : bool
    {
        if (is_null($company_model)) {
            $company_model = Company::find($company_id);
        }

        if (!is_null($company_model) && isset($input)) {
            $company_model->bankAccount()->updateOrCreate(['bankable_id'   => $company_model->id,
                                                         'bankable_type' => 'App\Domain\Company\Models\Company',
                                                        ],
                                                        [
                                                            'account_name'   => $input['account_name'],
                                                            'account_number' => $input['account_number'],
                                                            'ifsc_code'      => $input['ifsc_code'],
                                                        ]);

            return true;
        } else {
            return false;
        }
    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . 'account_name'   => 'required',
            $prefix . 'account_number' => 'required|alpha_num|min:5|max:35',
            $prefix . 'ifsc_code'      => 'required|alpha_num|size:11',
        ];
    }

    public static function validationAttributes($prefix = null) : array
    {
        return [
            $prefix . 'account_name'   => 'account name',
            $prefix . 'account_number' => 'account number',
            $prefix . 'ifsc_code'      => 'ifsc code',
        ];
    }
}
