<?php

namespace App\Http\Livewire\Models\Employees;

use App\Models\User;
use App\Models\Office;
use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\EmployeesDesignation;
use App\Models\Employee_PaymentDetails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class Index extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $searchTerm;
    public $perPage;
    public $officeParameter;

    public $viewUserModal = false;
    public $openModal = false;

    public $zip;
    public $city;
    public $office;
    public $email;
    public $state;
    public $full_Name;
    public $employee_id;
    public $phone_number;
    public $employee_bool = false;
    public $street_address;
    public $employee_salary;
    public $is_employee_bool;
    public $employee_details;
    public $employee_designation;

    public $pay_by_bank_bool;
    public $account_number;
    public $ifsc_code;

    public $designations;
    public $all_offices;

    /*
    These variables are for forms
    */
    public $R_full_Name;
    public $R_email;
    public $R_phone_number;
    public $R_street_address;
    public $R_city;
    public $R_state;
    public $R_zip;
    public $R_photo;
    public $R_salary;
    public $R_office;
    public $R_employee_designation;
    public $R_employee_bank_details_bool = false;
    public $R_pay_by_bank_bool = false;
    public $R_account_number;
    public $R_ifsc_code;

    public $showCreateForm = false;
    public $showSuccessMsg = false;
    public $throwError;

    public function resetForms()
    {
        $this->showCreateForm = true;
        $this->showSuccessMsg = false;
    }


    protected $rules = [
            'R_full_Name' => 'required|min:3|alpha_spaces',
            'R_email' => 'nullable|email:rfc,dns|unique:employees,email',
            'R_photo' => 'nullable|mimes:jpeg,bmp,png',
            'R_street_address' => 'nullable|max:255',
            'R_salary' => 'nullable|numeric',
            'R_phone_number' => 'required|integer|unique:employees,phone_number',
        ];

    protected $messages = [
            'R_email.required' => 'The Email Address cannot be empty.',
            'R_email.unique' => 'The Email Address format is already registered.',
            'R_email.email' => 'The Email Address is not valid.',
            'R_full_Name.required' => 'Name cannot be empty.',
            'R_full_Name.min' => 'The full name must have more than 3 characters.',
            'R_full_Name.alpha_spaces' => 'The full name must only have alphabets and spaces.',
            'R_photo.image' => 'The file is not an image.',
            'R_street_address.max' => 'The street address cannot be more than 255 characters.',
            'R_salary.required' => 'Salary is required when creating an employee.',
            'R_street_address.numeric' => 'Salary is not valid, please only enter numbers.',
            'R_phone_number.integer' => 'Phone Number is not valid.',
            'R_phone_number.required' => 'Phone Number is required.',
            'R_phone_number.unique' => 'Phone Number has already been registered.',
        ];
    
    /**
     * Return a list of all the offices
     *
     * @return void
     */
    public function returnOffices()
    {
        $all_offices = Office::all();
        return $all_offices;
    }

    /**
     * Return a list of all the Designations
     *
     * @return void
     */
    public function returnDesignations()
    {
        $designations = EmployeesDesignation::all();
        return $designations;
    }

    /**
     * Return the entire details of an employee
     *
     * @param  mixed $id
     * @return void
     */
    public function returnUserInfo(Employee $employee)
    {
        $this->full_Name = $employee->name;
        $this->email = $employee->email;
        $this->phone_number = $employee->phone_number;
        $this->street_address = $employee->street_address;
        $this->city = $employee->city;
        $this->state = $employee->state;
        $this->zip = $employee->zip;

        $this->is_employee_bool = 1;
        $this->employee_salary = $employee->salary;
        $this->employee_designation = $employee->designation->name;
        $this->office = $employee->office->name;
            
        if($employee->payment != NULL)
        {
            $this->pay_by_bank_bool = $employee->payment->pay_by_bank;
            $this->account_number = $employee->payment->account_number;
            $this->ifsc_code = $employee->payment->ifsc_code;
        }
        

        $this->viewUserModal = true;
    }

    public function dumpUser()
    {
        $this->zip = NULL;
        $this->city = NULL;
        $this->office = NULL;
        $this->email = NULL;
        $this->state = NULL;
        $this->full_Name = NULL;
        $this->employee_id = NULL;
        $this->phone_number = NULL;
        $this->employee_bool = NULL;
        $this->street_address = NULL;
        $this->employee_salary = NULL;
        $this->is_employee_bool = NULL;
        $this->employee_details = NULL;
        $this->employee_designation = NULL;
    }
    
     
    /**
     * Function to create a user
     *
     * @return void
     */
    public function createEmployee()
    {
        $this->validate();
        
        $employee = new Employee();
        $employee->name = $this->R_full_Name;
        $employee->email = $this->R_email;
        $employee->phone_number = $this->R_phone_number;
        $employee->street_address = $this->R_street_address;
        $employee->city = $this->R_city;
        $employee->state = $this->R_state;
        $employee->zip = $this->R_zip;
        $employee->salary = $this->R_salary;
        $employee->office_id = $this->R_office;
        $employee->employee_designation = $this->R_employee_designation;
        $employee->is_currently_hired = 1;
        if($this->R_photo != NULL)
        {
            $employee->profile_photo_path = str_replace("public/employee-photos/","employee-photos/",$this->R_photo->storePublicly('/public/employee-photos'));
        }
        $employee->save();

        $em_bank_acc_details = new Employee_PaymentDetails();
        $em_bank_acc_details->employee_id = $employee->id;

        if($this->R_pay_by_bank_bool == true)
        {
            $em_bank_acc_details->pay_by_bank = 1;
            $em_bank_acc_details->account_number = $this->R_account_number;
            $em_bank_acc_details->ifsc_code = $this->R_ifsc_code;
        } else {
            $em_bank_acc_details->pay_by_bank = 0;
        }
        $em_bank_acc_details->save();
        Employee::where('id', $employee->id)->update(array('payment_details' => $em_bank_acc_details->id));
        
        $this->users = User::all();

        $this->showCreateForm = False;
        $this->showSuccessMsg = True;

        if($user->id == NULL)
        {
            $this->$throwError = 1;
        }

        $this->R_full_Name = NULL;
        $this->R_email = NULL;
        $this->R_phone_number = NULL;
        $this->R_street_address = NULL;
        $this->R_city = NULL;
        $this->R_state = NULL;
        $this->R_zip = NULL;
        $this->R_photo = NULL;
        $this->R_salary = NULL;
        $this->R_office = NULL;
        $this->employee_bool = NULL;
        $this->R_employee_designation = NULL;
        $this->R_pay_by_bank_bool = NULL;
        $this->R_employee_bank_details_bool = NULL;
        $this->R_account_number = NULL;
        $this->R_ifsc_code = NULL;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function mount($_office = null)
    {
        /* These 2 default variables are for forms */
        $this->R_office = 0;
        $this->R_employee_designation = 0;

        $this->openModal = False;
        $this->viewUserModal = False;
        $this->showCreateForm = False;
        $this->showSuccessMsg = False;
        $this->employee_bool = True;
        $this->R_employee_bank_details_bool = False;
        $this->R_pay_by_bank_bool = false;

        $this->designations = $this->returnDesignations();
        $this->all_offices = $this->returnOffices();

        $this->perPage = 10;
    }

    public function render()
    {   
        if($this->officeParameter == null)
        {
            return view('livewire.models.employees.index',[
                'employees' => Employee::where('name','like', '%'.$this->searchTerm.'%')->paginate($this->perPage)
            ]);
        } else {
            return view('livewire.models.employees.index',[
                'employees' => Employee::where('name','like', '%'.$this->searchTerm.'%')->where('office_id', $this->officeParameter->id)->paginate($this->perPage)
            ]);
        }
        
    }
}
