<?php

namespace App\Domain\Trip\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Trip\Models\TripType;

class TripTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        TripType::create([ "name" => "Market Vehicle" ]);
        TripType::create([ "name" => "Fleet Vehicle" ]);
    }
}
