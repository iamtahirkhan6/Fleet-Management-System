<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Office;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::create(array('name' => 'Bhubaneshwar', 'company_id' => '1'));
        Office::create(array('name' => 'Joda', 'company_id' => '1'));
        Office::create(array('name' => 'Koira', 'company_id' => '1'));
        Office::create(array('name' => 'Banspani', 'company_id' => '2'));
        Office::create(array('name' => 'Bhadrasahi Chowk', 'company_id' => '2'));
    }
}
