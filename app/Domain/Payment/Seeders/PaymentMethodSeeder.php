<?php

namespace App\Domain\Payment\Seeders;

use App\Domain\Payment\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create(['name' => 'Cash']);
        PaymentMethod::create(['name' => 'Cheque']);
        PaymentMethod::create(['name' => 'Razorpay']);
        PaymentMethod::create(['name' => 'Bank Transfer']);
        PaymentMethod::create(["name" => "Bank Transfer via BBSR Office"]);
        PaymentMethod::create(["name" => "Bank Transfer via 3rd Party"]);
    }
}
