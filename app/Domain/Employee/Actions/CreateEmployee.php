<?php

namespace app\Domain\Employee\Actions;

use App\Domain\Payment\Models\BankAccount;
use App\Domain\General\Models\PhoneNumber;
use App\Domain\Employee\Models\Employee;
use Illuminate\Support\Facades\Validator;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateEmployee
{
    use AsAction;

    public static function rules($with_prefix = null, $prefix = null): array
    {
        return [
            $prefix . 'name' => 'required|max:255',
            $prefix . 'salary' => 'required|numeric',
            $prefix . 'email' => 'nullable|email|exists:employees,email',
            $prefix . 'office_id' => 'required|exists:offices,id',
            $prefix . 'company_id' => 'required|exists:companies,id',
            $prefix . 'employee_designation_id' => 'required|exists:employees_designations,id',
            $prefix . 'bank_bool' => 'nullable|boolean',
            $prefix . 'phone_number' => 'required|numeric|digits:10',
            $prefix . 'account_name' => 'required_if:' . $prefix . 'bank_bool,true',
            $prefix . 'account_number' => 'required_if:' . $prefix . 'bank_bool,true',
            $prefix . 'ifsc_code' => 'required_if:' . $prefix . 'bank_bool,true'
        ];
    }

    public function handle($input): bool|Employee
    {
        $validator = Validator::make($input, $this->rules());

        if ($validator->fails()) {
            return False;
        } else {
            $employee = new Employee;
            $employee->name = $input["name"];
            $employee->salary = $input["salary"];
            $employee->email = $input["email"];
            $employee->office_id = $input["office_id"];
            $employee->company_id = $input["company_id"];
            $employee->employee_designation_id = $input["employee_designation_id"];
            $employee->is_currently_hired = 1;
            $employee->save();

            if (strlen($input["phone_number"]) == 10) {
                $phone_number = new PhoneNumber;
                $phone_number->phone_number = $input["phone_number"];
                $employee->phoneNumber()->save($phone_number);
            }

            if (is_bool($input["bank_bool"]) && $input["bank_bool"] == true) {
                $bank_account = new BankAccount;
                $bank_account->account_name = $input["account_name"];
                $bank_account->account_number = $input["account_number"];
                $bank_account->ifsc_code = $input["ifsc_code"];
                $employee->bankAccount()->save($bank_account);
            }

            return $employee;
        }
    }
}
