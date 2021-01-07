<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExpenseCategory;

class ExpenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpenseCategory::create(['name' => 'Rent', 'type' => '1']);
        ExpenseCategory::create(['name' => 'Petrol', 'type' => '1']);
        ExpenseCategory::create(['name' => 'Diesel', 'type' => '1']);
        ExpenseCategory::create(['name' => 'Salary', 'type' => '1']);
        ExpenseCategory::create(['name' => 'Grocery', 'type' => '1']);
        ExpenseCategory::create(['name' => 'Furniture', 'type' => '1']);
        ExpenseCategory::create(['name' => 'Daily expense', 'type' => '1']);
        ExpenseCategory::create(['name' => 'Office supplies', 'type' => '1']);
        ExpenseCategory::create(['name' => 'Travel Expenses', 'type' => '1']);
        ExpenseCategory::create(['name' => 'Others', 'type' => '1']);
    }
}
