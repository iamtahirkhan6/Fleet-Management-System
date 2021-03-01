<?php

namespace App\Domain\Payee\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Payee\Models\PayeeType;

class PayeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PayeeType::create(['name' => 'Vendor']);
        PayeeType::create(['name' => 'Others']);
        PayeeType::create(['name' => 'Employee']);
    }
}
