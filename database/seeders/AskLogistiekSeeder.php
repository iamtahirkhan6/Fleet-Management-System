<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Domain\Trip\Models\Trip;
use App\Domain\Party\Models\Party;
use Illuminate\Support\Facades\Hash;
use App\Domain\Company\Models\Company;
use App\Domain\General\Models\Address;
use App\Domain\Project\Models\Project;
use App\Domain\Payment\Models\Payment;
use App\Domain\General\Models\Material;
use Illuminate\Database\Eloquent\Builder;
use App\Domain\Payment\Models\BankAccount;
use App\Domain\Consignee\Models\Consignee;
use App\Domain\LoadingPoint\Models\LoadingPoint;
use App\Domain\UnloadingPoint\Models\UnloadingPoint;

class AskLogistiekSeeder extends Seeder
{
    public function run()
    {
        // Create Company
        $company = Company::create([
            'name'         => 'Ask Logistiek Solutio Private Limited',
            'short_code'   => 'ASK',
            'use_razorpay' => '0',
            //                                       'razorpay_key_id'         => 'rzp_test_IR1ZQflkss4z99',
            //                                       'razorpay_key_secret'     => '50KofXFsggr51LKN5GzA9hb9',
            //                                       'razorpay_account_number' => '2323230074256115',
            'user_id'      => '2',
        ]);

        // Add Address
        $company->address()->save(new Address([
            'line_1'     => 'Plot No-A/22',
            'line_2'     => 'Palaspalli Bda Colony Airport Area, Khordha',
            'city'       => 'Bhubaneswar',
            'zip'        => 'Odisha',
            'state'      => '751020',
            'company_id' => $company->id,
        ]));

        // Add Manager
        User::where('id', 2)->update([ 'company_id' => $company->id ]);

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
        $gplvisa = LoadingPoint::create([
            'name'       => 'Gopalpur (Visa Steel)',
            'short_code' => 'GPLVISA',
            'company_id' => $company->id,
        ]);
        $gplsu   = LoadingPoint::create([
            'name'       => 'Gopalpur (Saraogi Udyog)',
            'short_code' => 'GPLSU',
            'company_id' => $company->id,
        ]);

        // Create Unloading Points
        $sml   = UnloadingPoint::create([
            'name'       => 'Sree Metaliks Limited',
            'short_code' => 'SML',
            'company_id' => $company->id,
        ]);
        $brspl = UnloadingPoint::create([
            'name'       => 'B.R. Sponge & Power Limited',
            'short_code' => 'BRSPL',
            'company_id' => $company->id,
        ]);
        $bs    = UnloadingPoint::create([
            'name'       => 'Brand Steel',
            'short_code' => 'BS',
            'company_id' => $company->id,
        ]);
        $psl   = UnloadingPoint::create([
            'name'       => 'Patnaik Steels & Alloys Ltd',
            'short_code' => 'PSL',
            'company_id' => $company->id,
        ]);
        $kjil  = UnloadingPoint::create([
            'name'       => 'KJ Ispat Ltd',
            'short_code' => 'KJIL',
            'company_id' => $company->id,
        ]);
        $mgm   = UnloadingPoint::create([
            'name'       => 'MGM Steels Ltd',
            'short_code' => 'MGM',
            'company_id' => $company->id,
        ]);
        $sjn   = UnloadingPoint::create([
            'name'       => 'Shri Jagannath',
            'short_code' => 'SJN',
            'company_id' => $company->id,
        ]);

        // Consignee
        $astl = Consignee::create([
            'name'       => 'AS Translogistics Private Limited',
            'short_code' => 'ASTL',
            'company_id' => $company->id,
        ]);

        // Create Projects
        Project::create([
            'name'               => $gplvisa->short_code . '/' . $sml->short_code . '/' . $astl->short_code,
            'material_id'        => Material::whereName('Coal')->first()->id,
            'loading_point_id'   => $gplvisa->id,
            'unloading_point_id' => $sml->id,
            'consignee_id'       => $astl->id,
            'company_id'         => $company->id,
            'status'             => 1,
        ]);
        Project::create([
            'name'               => $gplsu->short_code . '/' . $brspl->short_code . '/' . $astl->short_code,
            'material_id'        => Material::whereName('Coal')->first()->id,
            'loading_point_id'   => $gplsu->id,
            'unloading_point_id' => $brspl->id,
            'consignee_id'       => $astl->id,
            'company_id'         => $company->id,
            'status'             => 1,
        ]);
        Project::create([
            'name'               => $gplvisa->short_code . '/' . $psl->short_code . '/' . $astl->short_code,
            'material_id'        => Material::whereName('Coal')->first()->id,
            'loading_point_id'   => $gplvisa->id,
            'unloading_point_id' => $psl->id,
            'consignee_id'       => $astl->id,
            'company_id'         => $company->id,
            'status'             => 1,
        ]);
        Project::create([
            'name'               => $gplvisa->short_code . '/' . $bs->short_code . '/' . $astl->short_code,
            'material_id'        => Material::whereName('Coal')->first()->id,
            'loading_point_id'   => $gplvisa->id,
            'unloading_point_id' => $bs->id,
            'consignee_id'       => $astl->id,
            'company_id'         => $company->id,
            'status'             => 1,
        ]);
        Project::create([
            'name'               => $gplvisa->short_code . '/' . $kjil->short_code . '/' . $astl->short_code,
            'material_id'        => Material::whereName('Coal')->first()->id,
            'loading_point_id'   => $gplvisa->id,
            'unloading_point_id' => $kjil->id,
            'consignee_id'       => $astl->id,
            'company_id'         => $company->id,
            'status'             => 1,
        ]);
        Project::create([
            'name'               => $gplvisa->short_code . '/' . $mgm->short_code . '/' . $astl->short_code,
            'material_id'        => Material::whereName('Coal')->first()->id,
            'loading_point_id'   => $gplvisa->id,
            'unloading_point_id' => $mgm->id,
            'consignee_id'       => $astl->id,
            'company_id'         => $company->id,
            'status'             => 1,
        ]);
        Project::create([
            'name'               => $gplvisa->short_code . '/' . $sjn->short_code . '/' . $astl->short_code,
            'material_id'        => Material::whereName('Coal')->first()->id,
            'loading_point_id'   => $gplvisa->id,
            'unloading_point_id' => $sjn->id,
            'consignee_id'       => $astl->id,
            'company_id'         => $company->id,
            'status'             => 1,
        ]);

        // Import Data
        $this->importData();
    }

    public function importData()
    {
        $csv = array_map('str_getcsv', file('storage/app/imports/ask.csv'));
        foreach ($csv as $key => $row) {
            if ($key !== 0) {
                $date                  = $csv[$key][1];
                $party_name            = mb_convert_case($csv[$key][2], MB_CASE_TITLE);
                $pan_number            = strtoupper($csv[$key][3]);
                $challan_number        = $csv[$key][4];
                $project_name          = $csv[$key][5];
                $premium_rate          = $csv[$key][6];
                $rate                  = $csv[$key][7];
                $market_vehicle_number = $csv[$key][8];
                $tp_number             = explode('/', $csv[$key][9])[0];
                $tp_serial             = explode('/', $csv[$key][9])[1];
                $gross_weight          = $csv[$key][10];
                $tare_weight           = $csv[$key][11];
                $net_weight            = $csv[$key][12];
                $cash                  = $csv[$key][14];
                $hsd                   = $csv[$key][15];
                $cash_adv_pct          = 2;
                $cash_adv_fees         = $csv[$key][17];
                $tds                   = $csv[$key][18];
                $shortage_amount       = $csv[$key][18];
                $final_payable         = $csv[$key][19];
                $payment_date          = $csv[$key][20];
                $account_number        = $csv[$key][21];
                $ifsc_code             = $csv[$key][22];

                $trip                        = new Trip;
                $trip->date                  = Carbon::parse()->format('Y-m-d');
                $trip->trip_type             = 1;
                $trip->project_id            = Project::whereName($project_name)->first()->id;
                $trip->company_id            = 2;
                $trip->tp_number             = $tp_number;
                $trip->tp_serial             = $tp_serial;
                $trip->gross_weight          = $gross_weight;
                $trip->tare_weight           = $tare_weight;
                $trip->net_weight            = $net_weight;
                $trip->rate                  = $rate;
                $trip->total_amount          = (int) $net_weight * (int) $rate;
                $trip->hsd                   = $hsd;
                $trip->cash                  = $cash;
                $trip->premium_rate          = $premium_rate;
                $trip->market_vehicle_number = $market_vehicle_number;
                $trip->party_name            = $party_name;
                $trip->cash_adv_pct          = $cash_adv_pct;
                $trip->cash_adv_fees         = (isset($cash_adv_fees)) ? $cash_adv_fees : 0;
                $trip->tds                   = (isset($tds)) ? $tds : null;
                $trip->shortage_amount       = (isset($shortage_amount) && $shortage_amount > 0) ? $shortage_amount : null;
                $trip->profit                = ((int) $net_weight * (int) $trip->premium_rate) + (int) $trip->cash_adv_fees - (int) $final_payable;
                $trip->loading_done          = 1;
                $trip->loading_done          = (isset($payment_date) && $payment_date != '') ? 1 : 0;
                $trip->save();

                if ($pan_number != '' && $party_name != '' && $account_number != '' && $ifsc_code != '' && $payment_date != '') {
                    $party = Party::firstOrCreate([ 'pan' => $pan_number ], [
                        'name'       => $party_name,
                        'company_id' => 2,
                    ]);

                    $bank_accounts = BankAccount::whereHasMorph('bankable', [ Party::class ], function (Builder $query) use ($account_number) {
                        $query->where('account_number', $account_number);
                    })->get();

                    $bank_accounts_count = $bank_accounts->count();

                    if($bank_accounts_count <= 0)
                    {
                        $bank_account = new BankAccount([
                            'account_name'   => $party_name,
                            'account_number' => $account_number,
                            'ifsc_code'      => $ifsc_code,
                            'company_id'     => 2
                        ]);
                        $party->bankAccounts()->save($bank_account);
                        $payment = Payment::create(['amount' => $final_payable, 'bank_account_id' => $bank_account->id, 'trip_id' => $trip->id, 'payment_method_id' => 4, 'payment_status_id' => 1, 'company_id' => 2]);
                    }
                }
                $this->command->info("Created Trip For Vehicle " . $market_vehicle_number . " (" . $date . ")");
            }
        }

    }


}
