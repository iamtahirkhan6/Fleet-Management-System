<?php

namespace App\Domain\Company\Seeders;

use App\Domain\Company\Models\Company;
use App\Models\User;
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
        $company = Company::create([
            'name' => 'Ask Logistiek Solutio Private Limited',
            'short_name' => 'ASK',
            'address' => 'Plot No-A/29, Palaspalli Bda Colony Airport Area, Khordha - 751020',
            'gstin' => '',
            'pan' => '',
            'city' => 'Bhubaneswar',
            'state' => 'Odisha',
            'user_id' => '2'
        ]);

        User::where('id', 2)->update(['company_id' => $company->id]);

        $company = Company::create([
            'name' => 'Paradeep Parivahan Private Limited',
            'short_name' => 'PPPL',
            'address' => 'Plot No-A/29, Palaspalli Bda Colony Airport Area, Khordha - 751020',
            'gstin' => '',
            'pan' => '',
            'city' => 'Bhubaneswar',
            'state' => 'Odisha',
            'user_id' => '3'
        ]);
        User::where('id', 3)->update(['company_id' => $company->id]);
    }
}
