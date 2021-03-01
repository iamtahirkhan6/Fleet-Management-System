<?php

namespace App\Domain\Invoice\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Invoice\Models\InvoiceType;

class InvoiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InvoiceType::create(['name' => 'Manual']);
        InvoiceType::create(['name' => 'Automatic Invoicing']);
    }
}
