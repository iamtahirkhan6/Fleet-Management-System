<?php

namespace App\Domain\Invoice\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Invoice\Models\InvoiceStatus;

class InvoiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        InvoiceStatus::create([
            "name" => "Draft",
            "desc" => "The invoice has been created, but it has not been sent to the client.",
        ]);
        InvoiceStatus::create([
            "name" => "Sent",
            "desc" => "The invoice has been sent to the client.",
        ]);
        InvoiceStatus::create([
            "name" => "Partial",
            "desc" => "The invoice has been partially paid.",
        ]);
        InvoiceStatus::create([
            "name" => "Paid",
            "desc" => "The invoice has been paid in full.",
        ]);
        InvoiceStatus::create([
            "name" => "Overdue",
            "desc" => "The invoice is past its due date with an amount due still outstanding.",
        ]);
        InvoiceStatus::create([
            "name" => "Canceled",
            "desc" => "The invoice has been manually marked as Canceled by the user.",
        ]);
    }
}
