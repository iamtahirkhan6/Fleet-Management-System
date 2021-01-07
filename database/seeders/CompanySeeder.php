<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Ask Logistiek Solutio Private Limited',
            'short_name' => 'ASK',
            'address' => 'Plot No-a/29, Palaspalli Bda Colony Airport Area, Khordha - 751020',
            'gstin' => '',
            'pan' => '',
            'city' => 'Bhubaneswar',
            'state' => 'Odisha'
        ]);

        Company::create([
            'name' => 'Paradeep Parivahan Private Limited',
            'short_name' => 'PPPL',
            'address' => 'Plot No-a/29, Palaspalli Bda Colony Airport Area, Khordha - 751020',
            'gstin' => '',
            'pan' => '',
            'city' => 'Bhubaneswar',
            'state' => 'Odisha'
        ]);
    }
}
