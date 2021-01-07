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

            $table->id();   // Primary Id
            $table->date('loading_date');   // Loading Date

            $table->string('challan_serial')->nullable();  // Challan Number

            $table->unsignedBigInteger('vehicle_number');   // Vehicle Number
            $table->foreign('vehicle_number')->references('id')->on('vehicles');    // Vehicle Number Foreign Key

            $table->string('tp_number');

            // $table->bigInteger('loading_point')->unsigned();    // Loading Point
            // $table->foreign('loading_point')->references('id')->on('mines');    // Loading Point Foreign Key

            // $table->bigInteger('unloading_point')->unsigned();  // Unloading Point
            // $table->foreign('unloading_point')->references('id')->on('unloading_points');   // Unloading Point Foreign Key

            $table->integer('tp_serial');    // Serial

            $table->double('gross_weight')->nullable();   // Gross Weight
            $table->double('tare_weight')->nullable();   // Tare Weight
            $table->double('net_weight');   // Net Weight

            $table->double('rate');  // Rate per metric_ton
            $table->double('premium_rate')->nullable();  // Rate per metric_ton

            $table->bigInteger('total_amount'); // Total Amount (net_weight * rate)

            $table->boolean('hsd_given_bool')->default(0)->nullable(); // HSD Given or Not
            $table->integer('hsd_amount')->default(0)->nullable(); // HSD Advance

            $table->boolean('cash_given_bool')->default(0)->nullable();   // Cash Advance Given or Not
            $table->integer('cash_amount_given')->default(0)->nullable(); // Cash Advance Amount
            $table->double('cash_adv_percentage')->nullable();  // Percentage deducted giving cash
            $table->double('cash_adv_fees')->default(0)->nullable();  // Cash adv after minus
            // $table->double('cash_adv_with_fees')->default(0)->nullable();  // Cash adv after minus

            $table->boolean('tds_submitted_bool')->default(0)->nullable();   // Did the person submit TDS?
            $table->double('tds_percentage')->default(0.75)->nullable();    // What is the percent of tds to be deducted?
            $table->double('tds_amount')->default(0)->nullable();    // Amount to deduct if TDS not given

            $table->bigInteger('two_pay')->default(0)->nullable();

            $table->double('final_payable')->default(0);

            $table->boolean('step_loading')->default(0);
            $table->boolean('step_payment')->default(0);
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
