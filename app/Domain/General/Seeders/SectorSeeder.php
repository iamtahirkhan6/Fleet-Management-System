<?php

namespace App\Domain\General\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\General\Models\Sector;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        //
        Sector::create([ "name" => "Koira" ]);
        Sector::create([ "name" => "Joda" ]);
        Sector::create([ "name" => "Jajpur" ]);
        Sector::create([ "name" => "Baripada" ]);
        Sector::create([ "name" => "Bhawanipatna" ]);
        Sector::create([ "name" => "Koraput" ]);
        Sector::create([ "name" => "Sambalpur" ]);
        Sector::create([ "name" => "Keonjhar" ]);
        Sector::create([ "name" => "Berhampur" ]);
        Sector::create([ "name" => "Bolangir" ]);
        Sector::create([ "name" => "Rourkela" ]);
        Sector::create([ "name" => "Talcher" ]);
    }
}
