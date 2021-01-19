<?php

namespace App\Domain\Employee\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Employee\Models\EmployeesDesignation;
use App\Domain\Employee\Models\EmployeeDesignationClassification;

class EmployeeDesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee_designation_classification        =   EmployeeDesignationClassification::create(["name" => "Directors"])->id;
        $designation                                =   EmployeesDesignation::create(["name" => "Managing Director", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Director", "emp_desig_class_id" => $employee_designation_classification]);

        $employee_designation_classification        =   EmployeeDesignationClassification::create(["name" => "Executives"])->id;
        $designation                                =   EmployeesDesignation::create(["name" => "Chief Executive Officer", "emp_desig_class_id" => $employee_designation_classification]);

        $employee_designation_classification        =   EmployeeDesignationClassification::create(["name" => "Managers"])->id;
        $designation                                =   EmployeesDesignation::create(["name" => "Office Manager", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Project Manager", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Operations Manager", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Logistics Manager", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Fleet Manager", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Fleet Operations Manager", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Fleet Maintenance Manager", "emp_desig_class_id" => $employee_designation_classification]);

        $employee_designation_classification        =   EmployeeDesignationClassification::create(["name" => "Professionals"])->id;
        $designation                                =   EmployeesDesignation::create(["name" => "General Accountant", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Assistant Accountant", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Chartered Accountant", "emp_desig_class_id" => $employee_designation_classification]);


        $employee_designation_classification        =   EmployeeDesignationClassification::create(["name" => "Professional Assistants"])->id;
        $designation                                =   EmployeesDesignation::create(["name" => "Executive Assistant To Director", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Executive Assistant To Manager", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Logistics Executive", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Operations Executive", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Workshop Supervisor", "emp_desig_class_id" => $employee_designation_classification]);

        $employee_designation_classification        =   EmployeeDesignationClassification::create(["name" => "Personal Service Workers"])->id;
        $designation                                =   EmployeesDesignation::create(["name" => "Cook", "emp_desig_class_id" => $employee_designation_classification]);

        $employee_designation_classification        =   EmployeeDesignationClassification::create(["name" => "Machine Operators"])->id;
        $designation                                =   EmployeesDesignation::create(["name" => "Car Driver", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Heavy Vehicle Driver", "emp_desig_class_id" => $employee_designation_classification]);

        $employee_designation_classification        =   EmployeeDesignationClassification::create(["name" => "Elementary Occupations"])->id;
        $designation                                =   EmployeesDesignation::create(["name" => "Domestic Cleaner And Helper", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Office Cleaner And Helper", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Assistant Cook", "emp_desig_class_id" => $employee_designation_classification]);

        $employee_designation_classification        =   EmployeeDesignationClassification::create(["name" => "Clerical and Support Workers"])->id;
        $designation                                =   EmployeesDesignation::create(["name" => "Office Clerk", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Keyboard Operator", "emp_desig_class_id" => $employee_designation_classification]);
        $designation                                =   EmployeesDesignation::create(["name" => "Workshop Helper", "emp_desig_class_id" => $employee_designation_classification]);
    }
}
