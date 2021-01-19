<?php

namespace App\Domain\Employee\Seeders;

use App\Models\PhoneNumber;
use Illuminate\Database\Seeder;
use App\Domain\Office\Models\Office;
use App\Domain\Employee\Models\Employee;
use App\Domain\Payment\Models\BankAccount;
use App\Domain\Employee\Models\EmployeesDesignation;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->make_employee("Ankit Tripathi", "9106257990", "30000", "Operations Manager", "Gopalpur", True, "1","7167000100028390", "PUNB0716700" );
        $this->make_employee("V Jaydeep Dubey", "9429056443", "30000", "Logistics Manager", "Gopalpur", True,"1", "50100161496177", "HDFC0003066");
        $this->make_employee("Hiteshree Sahoo", "7894171862", "20000", "Executive Assistant To Director", "Bhubaneshwar","1", True, "20166094468", "SBIN0005302");
        $this->make_employee("Sk Nizat", "7854940098", "12000", "Cook", "Bhubaneshwar", True, "1","34787889932", "SBIN0003943");
        $this->make_employee("Sheikh Yousuf", "7978215132", "12000", "Car Driver", "Bhubaneshwar", True, "1","2212959800", "KKBK0000493");
        $this->make_employee("Gopal Dhar Dubey", "8400842008", "20000", "Operations Executive", "Gopalpur", True, "1","8355000100061678", "PUNB0835500");
        $this->make_employee("Nasir Khan", "7873390895", "30000", "Operations Manager", "Joda", True,"1", "37775101447", "SBIN0017943");
        $this->make_employee("Biraja Asis Pati", "6371112470", "12000", "Assistant Accountant", "Bhadrasahi", True, "2","99980109258256", "FDRL0001513");
        $this->make_employee("Faisal Khan", "9438012832", "50000", "Chief Executive Officer", "Banspani", False,"2", null , null);
        $this->make_employee("Anis Ur Rahman", "8018334300", "45000", "Project Manager", "Banspani", True,"2", "10171888664", "SBIN0003313");
    }

    public function make_employee($name, $phone_number, $salary, $designation, $office, $payment_bool, $company_id, $account_number = null, $ifsc_code = null)
    {
        $employee = new Employee();
        $employee->name = $name;
        $employee->salary = $salary;
        $off = Office::where('name', $office )->where('company_id', $company_id)->first();
        $employee->office_id                = $off->id;
        $employee->company_id = $company_id;
        $employee->is_currently_hired = 1;
        $employee->employee_designation_id  = EmployeesDesignation::firstOrCreate(['name' => $designation])->id;
        $employee->save();

        if($payment_bool == True)
        {
            $employee->bankAccount()->save(new BankAccount(["account_name" => $name, "account_number" => $account_number, "ifsc_code" => $ifsc_code]));
        }

        if($phone_number)
        {
            $employee->phoneNumber()->save(new PhoneNumber(["phone_number" => $phone_number]));
        }


    }
}
