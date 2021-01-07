<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Office;
use App\Models\Sector;
use App\Models\Employee;
use App\Models\EmployeesDesignation;
use App\Models\Employee_PaymentDetails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->make_employee("ANKIT TRIPATHI", "9106257990", "30000", "Operations Manager", "Joda", True, "7167000100028390", "PUNB0716700");
        $this->make_employee("V JAYDEEP DUBEY", "9429056443", "30000", "Logistics Manager", "Koira", True, "50100161496177", "HDFC0003066");
        $this->make_employee("MIR ABDUL TAWAB", "9556238486", "18000", "Accounts Manager", "Bhubaneshwar", True, "15130100067444", "FDRL0001513");
        $this->make_employee("HITESHREE SAHOO", "7894171862", "20000", "EA to Director", "Bhubaneshwar", True, "20166094468", "SBIN0005302");
        $this->make_employee("BIRAJA ASIS PATI", "6371112470", "12000", "Assistant Accountant", "Joda", True, "99980109258256", "FDRL0001513");
        $this->make_employee("AKASH KUMAR SWAIN", "9337036535", "8000", "Office Administration", "Bhubaneshwar", True, "31791185206", "SBIN0017943");
        $this->make_employee("SK NIZAT", "7854940098", "12000", "Cook", "Bhubaneshwar", True, "34787889932", "SBIN0003943");
        $this->make_employee("SHEIKH YOUSUF", "7978215132", "12000", "Driver", "Bhubaneshwar", True, "2212959800", "KKBK0000493");
        $this->make_employee("GOPAL DHAR DUBEY", "8400842008", "20000", "Operations Executive", "Koira", True, "8355000100061678", "PUNB0835500");

        $this->make_employee("FAISAL KHAN", "9438012832", "50000", "Director", "Bhubaneshwar", False);
        $this->make_employee("NASIR KHAN", "7873390895", "30000", "Operations Manager", "Joda", True, "37775101447", "SBIN0017943");
        $this->make_employee("ANIS UR RAHMAN", "8018334300", "45000", "Project Head", "Joda", True, "10171888664", "SBIN0003313");
        $this->make_employee("SHASWAT BISWAL", "7008434590", "15000", "Accounts Executive", "Joda", True, "540110110010139", "BKID0005401");
    }

    public function make_employee($name, $phone_number, $salary, $designation, $office, $payment_bool, $account_number = null, $ifsc_code = null)
    {
        // $user = new User();
        // $user->name = ucwords(strtolower($name));
        // $user->phone_number = $phone_number;
        // $user->password = Hash::make($phone_number);
        // $user->save();

        $employee = new Employee();
        $employee->name = ucwords(strtolower($name));
        $employee->phone_number = $phone_number;
        $employee->salary = $salary;
        $employee->office_id = Office::firstOrCreate(['name' => $office])->id;
        $employee->employee_designation = EmployeesDesignation::firstOrCreate(['name' => $designation])->id;
        $employee->is_currently_hired = 1;
        $employee->save();

        // User::where('id', $user->id)->update(array('employee_id' => $employee->id));

        $em_bank_acc_details = new Employee_PaymentDetails();
        $em_bank_acc_details->employee_id = $employee->id;

        if($payment_bool)
        {
            $em_bank_acc_details->pay_by_bank = 1;
            $em_bank_acc_details->account_number = $account_number;
            $em_bank_acc_details->ifsc_code = $ifsc_code;
        } else {
            $em_bank_acc_details->pay_by_bank = 0;
        }
        $em_bank_acc_details->save();
        Employee::where('id', $employee->id)->update(array('payment_details' => $em_bank_acc_details->id));

    }
}
