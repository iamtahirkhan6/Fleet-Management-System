<?php

namespace app\Domain\Employee\Actions;

use App\Models\PhoneNumber;
use App\Domain\Employee\Models\Employee;
use Illuminate\Support\Facades\Validator;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateEmployee
{
    use AsAction;

    public static function rules() : array
    {
        return [
            'name' => 'required|max:255',
            'salary' => 'required|numeric',
            'email' => 'nullable|email:rfc,dns,spoof|exists:employees,email',
            'office_id' => 'required|exists:offices,id',
            'company_id' => 'required|exists:company,id',
            'employee_designation_id' => 'required|exists:employees_designations,id',
            'phone_number' => 'required|numeric|digits:10'
        ];
    }

    public function handle($input) : Bool|Employee
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

            if(strlen($input["phone_number"]) == 10)
            {
                $phone_number = new PhoneNumber;
                $phone_number->phone_number = $input["phone_number"];
                $employee->phoneNumber()->save($phone_number);
            }

            return $employee;
        }
    }
}
