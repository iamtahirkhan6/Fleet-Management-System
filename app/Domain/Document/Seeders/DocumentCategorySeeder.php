<?php

namespace App\Domain\Document\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Document\Models\DocumentCategory;

class DocumentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DocumentCategory::create([ 'name' => "PAN" ]);
        DocumentCategory::create([ 'name' => "TDS Form" ]);
        DocumentCategory::create([ 'name' => "Aadhar Card" ]);
        DocumentCategory::create([ 'name' => "Transit Pass" ]);
        DocumentCategory::create([ 'name' => "Trip Challan" ]);
        DocumentCategory::create([ 'name' => "Bank Passbook" ]);
        DocumentCategory::create([ 'name' => "Driving License" ]);
        DocumentCategory::create([ 'name' => "Indian Passport" ]);
        DocumentCategory::create([ 'name' => "Parties Document" ]);
        DocumentCategory::create([ 'name' => "Registration Certificate" ]);
    }
}
