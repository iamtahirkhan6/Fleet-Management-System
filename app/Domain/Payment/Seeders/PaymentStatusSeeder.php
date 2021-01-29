<?php

namespace App\Domain\Payment\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Payment\Models\PaymentStatus;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        PaymentStatus::create([ 'name' => 'Success', 'desc' => 'The payment has been processed and completed.' ]);
        PaymentStatus::create([ 'name' => 'Canceled', 'desc' => 'The payment has been stopped before it was processed' ]);
        PaymentStatus::create([ 'name' => 'Pending', 'desc' => 'The payment has not yet been sent to the bank or to the processor.' ]);
        PaymentStatus::create([ 'name' => 'Rejected', 'desc' => 'The payment was not accepted when it was processed by the bank or the processor' ]);
    }
}
