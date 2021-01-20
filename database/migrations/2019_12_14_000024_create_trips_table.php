<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('trips', function (Blueprint $table) {

            $table->id();                                               // Primary Id
            $table->date('date');                                       // Loading Date

            $table->string('challan_serial')->nullable();               // Challan Number

            $table->foreignId('vehicle_id')->constrained('market_vehicles');   // Vehicle Number

            $table->string('tp_number');

            $table->integer('tp_serial');                               // Serial

            $table->double('gross_weight')->nullable();                 // Gross Weight
            $table->double('tare_weight')->nullable();                  // Tare Weight
            $table->double('net_weight');                               // Net Weight

            $table->double('rate');                                     // Rate per metric_ton
            $table->double('premium_rate')->nullable();                 // Rate per metric_ton

            $table->bigInteger('amount');                               // Total Amount (net_weight * rate)

            $table->integer('hsd')->default(0)->nullable();             // HSD Advance

            $table->integer('cash')->default(0)->nullable();            // Cash Advance Amount
            $table->double('cash_adv_pct')->nullable();                 // Percentage deducted giving cash
            $table->double('cash_adv_fees')->default(0)->nullable();    // Cash adv after minus

            $table->boolean('tds_sbm_bool')->default(0)->nullable();    // Did the person submit TDS?
            // $table->double('tds_pct')->default(0.75)->nullable();    // What is the percent of tds to be deducted?
            $table->double('tds')->default(0)->nullable();              // Amount to deduct if TDS not given

            $table->bigInteger('two_pay')->default(0)->nullable();      // 2 Pay

            $table->double('final_payable')->default(0);                // Final Payable

            $table->boolean('step_loading')->default(0);                // Loading Step
            $table->boolean('step_payment')->default(0);                // Payment Done
            // $table->boolean('finished')->default(0);                 // Finished
            $table->foreignId('company_id')->constrained('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
