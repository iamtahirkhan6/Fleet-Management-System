<?php

namespace App\Domain\Fleet\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Fleet\Models\Fleet;

class FleetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        Fleet::create([
            "name"       => "29X - TATA 3525",
            "company_id" => 2,
        ]);
    }
}
