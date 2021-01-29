<?php

namespace App\Domain\General\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\General\Models\Mine;

class MinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        Mine::create([
            'name'      => "R.P. Sao",
            "sector_id" => "2",
            "visible"   => 1,
        ]);
        Mine::create([
            'name'      => "K.J.S. Ahluwalia",
            "sector_id" => "2",
            "visible"   => 1,
        ]);
        Mine::create([
            'name'      => "PTA Koira",
            "sector_id" => "1",
            "visible"   => 1,
        ]);
        Mine::create([
            'name'      => "S.N. Mohanty",
            "sector_id" => "1",
            "visible"   => 1,
        ]);
        Mine::create([
            'name'      => "Korp",
            "sector_id" => "1",
            "visible"   => 1,
        ]);
        Mine::create([
            'name'      => "National Enterprises",
            "sector_id" => "1",
            "visible"   => 1,
        ]);
        Mine::create([
            'name'      => "JSW (Narayanposhi)",
            "sector_id" => "1",
            "visible"   => 1,
        ]);
        Mine::create([
            'name'      => "JSW (Nuagaon)",
            "sector_id" => "1",
            "visible"   => 1,
        ]);
    }
}
