<?php

namespace App\Domain\General\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\General\Models\UnloadingPoint;

class UnloadingPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UnloadingPoint::create(["short_code" => "PDP Port", "name" => "Paradeep Port"]);
        UnloadingPoint::create(["short_code" => "G. Port", "name" => "Gopalpur Port"]);
        UnloadingPoint::create(["short_code" => "Barbil", "name" => "Barbil"]);
        UnloadingPoint::create(["short_code" => "BSPX Rly Sdg", "name" => "Banspani Railway Siding"]);
        UnloadingPoint::create(["short_code" => "JRLI Rly Sdg", "name" => "Jurudi Railway Siding"]);
        UnloadingPoint::create(["short_code" => "IOJB Rly Sdg", "name" => "IOJB Railway Siding"]);
    }
}
