<?php

namespace App\Domain\Payment\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Payment\Models\TaxCategory;

class TaxCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        TaxCategory::create([
            "section"    => "194C Contractor - HUF/Individuals",
            "percentage" => "0.75",
        ]);
        TaxCategory::create([
            "section"    => "194C Contractor - Others",
            "percentage" => "1.5",
        ]);
    }
}
