<?php

namespace App\Domain\Consignee\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\General\Models\Address;
use App\Domain\Consignee\Models\Consignee;

class ConsigneeSeeder extends Seeder
{

    public function run()
    {

        $consignee = Consignee::create([
            'name'       => 'M/S Shri Aandal Logistics',
            'gstin'      => '21ADUFS0064M1ZR',
            'pan'        => 'ADUFS0064M',
            'company_id' => '2',
        ]);
        $consignee->address()->save(new Address([
            "line_1" => "Plot No - 401 DUHSHASANSAHOO Building Azad Basti",
            "line_2" => "PO- JODA",
            "city"   => "Kendujher",
            "zip"    => "758034",
            "state"  => "Odisha",
            'company_id' => 2
        ]));

        $consignee = Consignee::create([
            'name'       => 'Ironide Minerals Private Limited',
            'gstin'      => '21AADCI3789E1ZP',
            'pan'        => 'AADCI3789E',
            'company_id' => '2',
        ]);
        $consignee->address()->save(new Address([
            'line_1' => 'Plot No - 118/369, New Colony',
            'line_2' => 'Jasmuhota',
            'city'   => 'Kendujher',
            'zip'    => '758001',
            'state'  => 'Odisha',
            'company_id' => 2
        ]));

        $consignee = Consignee::create([
            'name'       => 'Mohashakti Forging Private Limited',
            'gstin'      => '21AAECM7104N1ZK',
            'pan'        => 'AAECM7104N',
            'company_id' => 2,
        ]);
        $consignee->address()->save(new Address([
            'line_1' => 'Plot No - 81',
            'line_2' => 'Shakti Nagar Link Road',
            'city'   => 'Cuttack',
            'zip'    => '753012',
            'state'  => 'Odisha',
            'company_id' => 2
        ]));

        $consignee = Consignee::create([
            'name'       => 'B S Minerals',
            'gstin'      => '21BNHPS1458R2ZE',
            'pan'        => '21BNHP1458R',
            'company_id' => '2',
        ]);
        $consignee->address()->save(new Address([
            'line_1' => '3rd Floor, Plot No 435, Khata No.251/584',
            'line_2' => 'BS Mall Kamargadia',
            'city'   => 'Keonjhargarh',
            'zip'    => '758001',
            'state'  => 'Odisha',
            'company_id' => 2
        ]));

        $consignee = Consignee::create([
            'name'       => 'Ms Lall Minerals Pvt. Ltd.',
            'company_id' => '2',
        ]);
        $consignee->address()->save(new Address([
            'line_1' => 'N-4/320F, IRC Village',
            'line_2' => 'Nayapalli',
            'city'   => 'Bhubaneswar',
            'zip'    => '751015',
            'state'  => 'Odisha',
            'company_id' => 2
        ]));

        $consignee = Consignee::create([
            'name'       => 'S.M. Niryat Pvt. Ltd.',
            'company_id' => '2',
        ]);
        $consignee = Consignee::create([
            'name'       => 'JSW Steel Ltd',
            'company_id' => '2',
        ]);
    }
}
