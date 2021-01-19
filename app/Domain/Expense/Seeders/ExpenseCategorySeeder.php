<?php

namespace App\Domain\Expense\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Expense\Models\ExpenseCategory;

class ExpenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpenseCategory::create(['name' => 'Rent', 'expense_category_type_id' => '1']);
        ExpenseCategory::create(['name' => 'Petrol', 'expense_category_type_id' => '1']);
        ExpenseCategory::create(['name' => 'Diesel', 'expense_category_type_id' => '1']);
        ExpenseCategory::create(['name' => 'Salary', 'expense_category_type_id' => '1']);
        ExpenseCategory::create(['name' => 'Grocery', 'expense_category_type_id' => '1']);
        ExpenseCategory::create(['name' => 'Furniture', 'expense_category_type_id' => '1']);
        ExpenseCategory::create(['name' => 'Daily expense', 'expense_category_type_id' => '1']);
        ExpenseCategory::create(['name' => 'Office supplies', 'expense_category_type_id' => '1']);
        ExpenseCategory::create(['name' => 'Travel Expenses', 'expense_category_type_id' => '1']);
        ExpenseCategory::create(['name' => 'Others', 'expense_category_type_id' => '1']);
    }
}
