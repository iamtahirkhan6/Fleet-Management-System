<?php

namespace App\Domain\Fleet\Seeders;

use App\Domain\Fleet\Models\Fleet;
use Illuminate\Database\Seeder;

class FleetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fleet::create(["name" => "29X - TATA 3525"]);
    }
}
