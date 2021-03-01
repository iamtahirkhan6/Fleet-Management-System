<?php

namespace App\Domain\Company\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Domain\Company\Models\Company;
use App\Domain\General\Models\Address;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $company = Company::create([
            'name'       => 'Paradeep Parivahan Private Limited',
            'short_code' => 'PPPL',
            'user_id'    => '3',
        ]);
        $company->address()->save(new Address([
            'line_1'     => 'Plot No-A/29',
            'line_2'     => 'Palaspalli Bda Colony Airport Area, Khordha',
            'city'       => 'Bhubaneswar',
            'zip'        => 'Odisha',
            'state'      => '751020',
            'company_id' => $company->id,
        ]));
        User::whereId(3)->update([ 'company_id' => $company->id ]);
    }
}
