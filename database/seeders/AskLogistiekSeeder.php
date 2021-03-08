<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Domain\Company\Models\Company;
use App\Domain\General\Models\Address;
use App\Domain\Project\Models\Project;
use App\Domain\General\Models\Material;
use App\Domain\Consignee\Models\Consignee;
use App\Domain\LoadingPoint\Models\LoadingPoint;
use App\Domain\UnloadingPoint\Models\UnloadingPoint;

class AskLogistiekSeeder extends Seeder
{
    public function run()
    {
        // Create Company
        $company = Company::create([
                                       'name'                    => 'Ask Logistiek Solutio Private Limited',
                                       'short_code'              => 'ASK',
                                       'use_razorpay'            => '0',
//                                       'razorpay_key_id'         => 'rzp_test_IR1ZQflkss4z99',
//                                       'razorpay_key_secret'     => '50KofXFsggr51LKN5GzA9hb9',
//                                       'razorpay_account_number' => '2323230074256115',
                                       'user_id'                 => '2',
                                   ]);

        // Add Address
        $company->address()
            ->save(new Address([
                                   'line_1'     => 'Plot No-A/22',
                                   'line_2'     => 'Palaspalli Bda Colony Airport Area, Khordha',
                                   'city'       => 'Bhubaneswar',
                                   'zip'        => 'Odisha',
                                   'state'      => '751020',
                                   'company_id' => $company->id,
                               ]));

        // Add Manager
        User::where('id', 2)
            ->update(['company_id' => $company->id]);

        // Create Users
        $user               = new User();
        $user->name         = 'Ashish';
        $user->phone_number = '6371112470';
        $user->password     = Hash::make('password');
        $user->company_id   = $company->id;
        $user->save();
        $user->attachRole('trips_entry_manager');

        $user               = new User();
        $user->name         = 'Parthasarathy Panda';
        $user->phone_number = '9337264566';
        $user->company_id   = $company->id;
        $user->password     = Hash::make('password');
        $user->save();
        $user->attachRole('trips_payment_executive');

        // Create Loading Points
        $gplvisa = LoadingPoint::create(['name'       => 'Gopalpur (Visa Steel)',
                                         'short_code' => 'GPLVISA',
                                         'company_id' => $company->id]);
        $gplsu   = LoadingPoint::create(['name'       => 'Gopalpur (Saraogi Udyog)',
                                         'short_code' => 'GPLSU',
                                         'company_id' => $company->id]);

        // Create Unloading Points
        $sml   = UnloadingPoint::create(['name'       => 'Sree Metaliks Limited',
                                         'short_code' => 'SML',
                                         'company_id' => $company->id]);
        $brspl = UnloadingPoint::create(['name'       => 'B.R. Sponge & Power Limited',
                                         'short_code' => 'BRSPL',
                                         'company_id' => $company->id]);
        $bs    = UnloadingPoint::create(['name'       => 'Brand Steel',
                                         'short_code' => 'BS',
                                         'company_id' => $company->id]);
        $psl   = UnloadingPoint::create(['name'       => 'Patnaik Steels & Alloys Ltd',
                                         'short_code' => 'PSL',
                                         'company_id' => $company->id]);
        $kjil  = UnloadingPoint::create(['name'       => 'KJ Ispat Ltd',
                                         'short_code' => 'KJIL',
                                         'company_id' => $company->id]);
        $mgm   = UnloadingPoint::create(['name'       => 'MGM Steels Ltd',
                                         'short_code' => 'MGM',
                                         'company_id' => $company->id]);
        $sjn   = UnloadingPoint::create(['name'       => 'Shri Jagannath',
                                         'short_code' => 'SJN',
                                         'company_id' => $company->id]);

        // Consignee
        $astl = Consignee::create(['name'       => 'AS Translogistics Private Limited',
                                   'short_code' => 'ASTL',
                                   'company_id' => $company->id]);

        // Create Projects
        Project::create(['name'               => $gplvisa->short_code . '/' . $sml->short_code . '/' . $astl->short_code,
                         'material_id'        => Material::whereName('Coal')->first()->id,
                         'loading_point_id'   => $gplvisa->id,
                         'unloading_point_id' => $sml->id,
                         'consignee_id'       => $astl->id,
                         'company_id'         => $company->id,
                         'status'             => 1]);
        Project::create(['name'               => $gplsu->short_code . '/' . $brspl->short_code . '/' . $astl->short_code,
                         'material_id'        => Material::whereName('Coal')->first()->id,
                         'loading_point_id'   => $gplsu->id,
                         'unloading_point_id' => $brspl->id,
                         'consignee_id'       => $astl->id,
                         'company_id'         => $company->id,
                         'status'             => 1]);
        Project::create(['name'               => $gplvisa->short_code . '/' . $psl->short_code . '/' . $astl->short_code,
                         'material_id'        => Material::whereName('Coal')->first()->id,
                         'loading_point_id'   => $gplvisa->id,
                         'unloading_point_id' => $psl->id,
                         'consignee_id'       => $astl->id,
                         'company_id'         => $company->id,
                         'status'             => 1]);
        Project::create(['name'               => $gplvisa->short_code . '/' . $bs->short_code . '/' . $astl->short_code,
                         'material_id'        => Material::whereName('Coal')->first()->id,
                         'loading_point_id'   => $gplvisa->id,
                         'unloading_point_id' => $bs->id,
                         'consignee_id'       => $astl->id,
                         'company_id'         => $company->id,
                         'status'             => 1]);
        Project::create(['name'               => $gplvisa->short_code . '/' . $kjil->short_code . '/' . $astl->short_code,
                         'material_id'        => Material::whereName('Coal')->first()->id,
                         'loading_point_id'   => $gplvisa->id,
                         'unloading_point_id' => $kjil->id,
                         'consignee_id'       => $astl->id,
                         'company_id'         => $company->id,
                         'status'             => 1]);
        Project::create(['name'               => $gplvisa->short_code . '/' . $mgm->short_code . '/' . $astl->short_code,
                         'material_id'        => Material::whereName('Coal')->first()->id,
                         'loading_point_id'   => $gplvisa->id,
                         'unloading_point_id' => $mgm->id,
                         'consignee_id'       => $astl->id,
                         'company_id'         => $company->id,
                         'status'             => 1]);
        Project::create(['name'               => $gplvisa->short_code . '/' . $mgm->short_code . '/' . $astl->short_code,
                         'material_id'        => Material::whereName('Coal')->first()->id,
                         'loading_point_id'   => $gplvisa->id,
                         'unloading_point_id' => $sjn->id,
                         'consignee_id'       => $astl->id,
                         'company_id'         => $company->id,
                         'status'             => 1]);
    }


}
