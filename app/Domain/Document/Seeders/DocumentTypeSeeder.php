<?php

namespace App\Domain\Document\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Document\Models\DocumentType;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentType::create(['name' => 'Challan Copy']);
        DocumentType::create(['name' => 'Original Challan']);
        DocumentType::create(['name' => 'Expense Receipt']);
        DocumentType::create(['name' => 'Vehicle RC']);
        DocumentType::create(['name' => 'PAN']);
        DocumentType::create(['name' => 'TDS']);
    }
}
