<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create(['name' => 'KJS/GPL/Mohashakti', 'material' => '1', 'source' => '2', 'destination' => '2', 'consignee' => '3', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'PTA/GPL/Mohashakti', 'material' => '1', 'source' => '3', 'destination' => '2', 'consignee' => '3', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'SNM/PDP/BS Minerals', 'material' => '1', 'source' => '4', 'destination' => '1', 'consignee' => '4', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'SNM/GPL/Mohashakti', 'material' => '1', 'source' => '4', 'destination' => '2', 'consignee' => '3', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'KJS/PDP/Aandal', 'material' => '1', 'source' => '2', 'destination' => '1', 'consignee' => '1', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'RPSAO/PDP/Aandal', 'material' => '1', 'source' => '1', 'destination' => '1', 'consignee' => '1', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'SNM/PDP/Ironide', 'material' => '1', 'source' => '4', 'destination' => '1', 'consignee' => '2', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'NE/GPL/BS Minerals', 'material' => '1', 'source' => '6', 'destination' => '2', 'consignee' => '4', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'PTA/PDP/BS Minerals', 'material' => '1', 'source' => '3', 'destination' => '1', 'consignee' => '4', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'RPSAO/GPL/Aandal', 'material' => '1', 'source' => '1', 'destination' => '2', 'consignee' => '1', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'KJS/GPL/Aandal', 'material' => '1', 'source' => '2', 'destination' => '2', 'consignee' => '1', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'RPSAO/GPL/SM Niryat', 'material' => '1', 'source' => '1', 'destination' => '2', 'consignee' => '6', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'KORP/PDP/Ironide', 'material' => '1', 'source' => '5', 'destination' => '1', 'consignee' => '2', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'SNM/BRL/Ironide', 'material' => '1', 'source' => '4', 'destination' => '3', 'consignee' => '2', 'company_id' => '1', 'status' => '0']);
        Project::create(['name' => 'JSWNP/BRS/JSL', 'material' => '1', 'source' => '7', 'destination' => '4', 'consignee' => '7', 'company_id' => '2', 'status' => '1']);
        Project::create(['name' => 'JSWNP/BRS/JSL', 'material' => '1', 'source' => '7', 'destination' => '5', 'consignee' => '7', 'company_id' => '2', 'status' => '1']);
    }
}