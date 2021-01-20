<?php

namespace App\Domain\Consignee\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Consignee\Models\Consignee;

class ConsigneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Consignee::create(['name' => 'M/S Shri Aandal Logistics', 'address' => 'Plot No - 401 DUHSHASANSAHOO Building Azad Basti. PO- JODA, Kendujher Odisha - 758034', 'gstin_uin' => '21ADUFS0064M1ZR', 'pan' => 'ADUFS0064M', 'state_name' => 'Odisha', 'company_id' => '2']);
        Consignee::create(['name' => 'Ironide Minerals Private Limited', 'address' => 'Plot No - 118/369, New Colony, Jasmuhota, Kendujher Odisha - 758001', 'gstin_uin' => '21AADCI3789E1ZP', 'pan' => 'AADCI3789E', 'state_name' => 'Odisha', 'company_id' => '2']);
        Consignee::create(['name' => 'Mohashakti Forging Private Limited', 'address' => 'Plot No - 81, Shakti Nagar Link Road Cuttack - 753012', 'gstin_uin' => '21AAECM7104N1ZK', 'pan' => 'AAECM7104N', 'state_name' => 'Odisha', 'company_id' => '2']);
        Consignee::create(['name' => 'B S Minerals', 'address' => '3rd Floor, Plot No 435, Khata No.251/584,BS Mall Kamargadia, Keonjhargarh - 758001', 'gstin_uin' => '21BNHPS1458R2ZE', 'pan' => '21BNHP1458R', 'state_name' => 'Odisha', 'company_id' => '2']);
        Consignee::create(['name' => 'Ms Lall Minerals Pvt. Ltd.', 'address' => 'N-4/320F IRC Village, Nayapalli, Bhubaneswar - 751015', 'gstin_uin' => 'NILL', 'pan' => 'NILL', 'state_name' => 'Odisha', 'company_id' => '2']);
        Consignee::create(['name' => 'S.M. Niryat Pvt. Ltd.', 'address' => '', 'gstin_uin' => 'NILL', 'pan' => 'NILL', 'state_name' => 'Odisha', 'company_id' => '2']);
        Consignee::create(['name' => 'JSW Steel Ltd ', 'address' => '', 'gstin_uin' => 'NILL', 'pan' => 'NILL', 'state_name' => 'Odisha', 'company_id' => '2']);
    }
}
