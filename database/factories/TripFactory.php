<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use App\Domain\Trip\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

class TripFactory extends Factory
{
    protected $model = Trip::class;

    /**
     * Define the model's default state.
     * @return array
     */
    public function definition()
    {
        $net_weight = $this->faker->randomFloat(3, 22, 32);
        $rate       = $this->faker->randomFloat(2, '900', '1500');
        return [
            'date'                  => \Carbon\Carbon::today()->subDays(rand(0, 365))->format('Y-m-d'),
            'challan_serial'        => $this->faker->randomNumber(5),
            //			'vehicle_id'                  => ''
            'project_id'            => $this->faker->numberBetween('1', '16'),
            'tp_number'             => 'L' . $this->faker->randomNumber(8),
            'tp_serial'             => $this->faker->randomNumber(3),
            //            'gross_weight'          => $this->faker->randomFloat(3, 11, 32),
            //            'tare_weight'           => $this->faker->randomFloat(3),
            'net_weight'            => $net_weight,
            'rate'                  => $rate,
            //			'premium_rate'                => $this->faker->randomFloat(),
            'hsd'                   => $this->faker->randomNumber('4'),
            'cash'                  => $this->faker->randomNumber('4'),
            //			'cash_adv_pct'                => $this->faker->randomFloat(),
            //			'cash_adv_fees'               => $this->faker->randomFloat(),
            //			'tds_sbm_bool'                => $this->faker->randomNumber(),
            //			'tax_category_id'             => $this->faker->randomNumber(),
            //			'tds'                         => $this->faker->randomFloat(),
            //			'two_pay'                     => $this->faker->randomNumber(),
            //			'final_payable'               => $this->faker->randomFloat(),
            //            'loading_done'          => 1,
            //			'step_payment'                => $this->faker->randomNumber(),
            'company_id'            => 1,
            //			'agent_id'                    => $this->faker->randomNumber(),
            //			'driver_type'                 => $this->faker->word,
            //			'driver_id'                   => $this->faker->randomNumber(),
            //			'trip_payment_transaction_id' => $this->faker->randomNumber(),
            'created_by'            => 4,
            //			'finished_by'                 => $this->faker->randomNumber(),
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
            'trip_type'             => 1,
            'market_vehicle_number' => 'OD' . $this->faker->randomDigit() . $this->faker->randomDigit() . $this->faker->randomDigit() . $this->faker->randomElement([
                    'G',
                    'K',
                    'L',
                    'M',
                ]) . $this->faker->randomNumber('4'),
            'party_name'            => $this->faker->name,
            'party_number'          => $this->faker->randomNumber(9),
            'driver_name'           => $this->faker->name,
            'driver_phone_num'      => $this->faker->randomNumber(9),
            //            'driver_license_num'    => $this->faker->word,
            'total_amount'          => $net_weight * $rate,
            //			'payment_id'                  => $this->faker->randomNumber(),
//            'profit'                => $this->faker->randomFloat(),
            //			'market_vehicle_id'           => $this->faker->randomNumber(),
            //			'fleet_vehicle_id'            => $this->faker->randomNumber(),
            //			'fleet_driver_id'             => $this->faker->randomNumber(),
            'loading_done'          => 1,
            'payment_done'          => 0,
            'completed'             => 0,
        ];
    }
}
