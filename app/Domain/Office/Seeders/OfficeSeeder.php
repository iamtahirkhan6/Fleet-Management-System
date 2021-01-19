<?php

namespace App\Domain\Office\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Office\Models\Office;

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
        Office::create(array('name' => 'Gopalpur', 'company_id' => '1'));
        Office::create(array('name' => 'Joda', 'company_id' => '1'));
        Office::create(array('name' => 'Banspani', 'company_id' => '2'));
        Office::create(array('name' => 'Bhadrasahi', 'company_id' => '2'));
    }
}
