<?php

namespace Database\Seeders;

use App\Models\TripType;
use Illuminate\Database\Seeder;

class TripTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TripType::create(['name' => 'Market Vehicle']);
        TripType::create(['name' => 'Owned Vehicle']);
    }
}
