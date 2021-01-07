<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeesDesignation;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeesDesignation::create(['name' => 'Operations Manager']);
        EmployeesDesignation::create(['name' => 'Logistics Manager']);
        EmployeesDesignation::create(['name' => 'Accounts Manager']);
        EmployeesDesignation::create(['name' => 'Office Administration']);
        EmployeesDesignation::create(['name' => 'Cook']);
        EmployeesDesignation::create(['name' => 'Driver']);
        EmployeesDesignation::create(['name' => 'Operations Executive']);
        EmployeesDesignation::create(['name' => 'Project Head']);
        EmployeesDesignation::create(['name' => 'Accounts Executive']);
        EmployeesDesignation::create(['name' => 'Field Incharge']);
        EmployeesDesignation::create(['name' => 'EA to Director']);
        EmployeesDesignation::create(['name' => 'Director']);
    }
}
