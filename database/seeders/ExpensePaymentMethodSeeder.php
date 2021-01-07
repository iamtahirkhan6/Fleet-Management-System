<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExpensePaymentMethod;

class ExpensePaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpensePaymentMethod::create(['name' => 'Cash']);
        ExpensePaymentMethod::create(['name' => 'Bank Transfer']);
        ExpensePaymentMethod::create(['name' => 'Cheque']);
    }
}
