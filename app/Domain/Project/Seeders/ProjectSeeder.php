<?php

namespace App\Domain\Project\Seeders;

use App\Domain\Project\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create(['name' => 'KJS/GPL/Mohashakti', 'material_id' => '1', 'mine_id' => '2', 'unloading_point_id' => '2', 'consignee_id' => '3', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'PTA/GPL/Mohashakti', 'material_id' => '1', 'mine_id' => '3', 'unloading_point_id' => '2', 'consignee_id' => '3', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'SNM/PDP/BS Minerals', 'material_id' => '1', 'mine_id' => '4', 'unloading_point_id' => '1', 'consignee_id' => '4', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'SNM/GPL/Mohashakti', 'material_id' => '1', 'mine_id' => '4', 'unloading_point_id' => '2', 'consignee_id' => '3', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'KJS/PDP/Aandal', 'material_id' => '1', 'mine_id' => '2', 'unloading_point_id' => '1', 'consignee_id' => '1', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'RPSAO/PDP/Aandal', 'material_id' => '1', 'mine_id' => '1', 'unloading_point_id' => '1', 'consignee_id' => '1', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'SNM/PDP/Ironide', 'material_id' => '1', 'mine_id' => '4', 'unloading_point_id' => '1', 'consignee_id' => '2', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'NE/GPL/BS Minerals', 'material_id' => '1', 'mine_id' => '6', 'unloading_point_id' => '2', 'consignee_id' => '4', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'PTA/PDP/BS Minerals', 'material_id' => '1', 'mine_id' => '3', 'unloading_point_id' => '1', 'consignee_id' => '4', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'RPSAO/GPL/Aandal', 'material_id' => '1', 'mine_id' => '1', 'unloading_point_id' => '2', 'consignee_id' => '1', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'KJS/GPL/Aandal', 'material_id' => '1', 'mine_id' => '2', 'unloading_point_id' => '2', 'consignee_id' => '1', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'RPSAO/GPL/SM Niryat', 'material_id' => '1', 'mine_id' => '1', 'unloading_point_id' => '2', 'consignee_id' => '6', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'KORP/PDP/Ironide', 'material_id' => '1', 'mine_id' => '5', 'unloading_point_id' => '1', 'consignee_id' => '2', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'SNM/BRL/Ironide', 'material_id' => '1', 'mine_id' => '4', 'unloading_point_id' => '3', 'consignee_id' => '2', 'company_id' => '2', 'status' => '0']);
        Project::create(['name' => 'JSWNP/BRS/JSL', 'material_id' => '1', 'mine_id' => '7', 'unloading_point_id' => '4', 'consignee_id' => '7', 'company_id' => '2', 'status' => '1']);
        Project::create(['name' => 'JSWNP/BRS/JSL', 'material_id' => '1', 'mine_id' => '7', 'unloading_point_id' => '5', 'consignee_id' => '7', 'company_id' => '2', 'status' => '1']);
    }
}
