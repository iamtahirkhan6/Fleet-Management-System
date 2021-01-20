<?php

namespace App\Domain\Payment\Seeders;

use App\Domain\Payment\Models\TaxCategory;
use Illuminate\Database\Seeder;

class TaxCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaxCategory::create(["section" => "194C Contractor - HUF/Individuals", "percentage" => "0.75"]);
        TaxCategory::create(["section" => "194C Contractor - Others", "percentage" => "1.5"]);
    }
}
