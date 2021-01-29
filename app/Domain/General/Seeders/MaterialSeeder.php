<?php

namespace App\Domain\General\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\General\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        Material::create([ 'name' => 'Iron' ]);
        Material::create([ 'name' => 'Coal' ]);
    }
}
