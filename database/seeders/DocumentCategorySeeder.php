<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DocumentCategory;

class DocumentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentCategory::create(['name' => "Trip Challan"]);
        DocumentCategory::create(['name' => "Transit Pass"]);
        DocumentCategory::create(['name' => "Parties Document"]);
    }
}
