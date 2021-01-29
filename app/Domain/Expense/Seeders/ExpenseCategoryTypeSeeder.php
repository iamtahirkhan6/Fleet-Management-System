<?php

namespace App\Domain\Expense\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Expense\Models\ExpenseCategoryType;

class ExpenseCategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        ExpenseCategoryType::create([ 'name' => 'Office' ]);
        ExpenseCategoryType::create([ 'name' => 'Maintenance' ]);
    }
}
