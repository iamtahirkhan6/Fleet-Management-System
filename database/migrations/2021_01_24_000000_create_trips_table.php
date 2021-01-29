<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('trips', function (Blueprint $table) {

            $table->id();                                                                                            // Primary Id
            $table->date('date');                                                                           // Loading Date
            $table->foreignId('trip_type');                                                                 // 01 = Market Vehicle, 2 = Owned Vehicle
            $table->foreignId('project_id')->constrained('projects');                               // Project
            $table->foreignId('company_id')->constrained('companies');                              // Company
            $table->string('challan_serial')->nullable();                                                   // Challan Number
            $table->string('tp_number');                                                                    // TP Number
            $table->integer('tp_serial');                                                                   // TP Serial
            $table->double('gross_weight')->nullable();                                                     // Gross Weight
            $table->double('tare_weight')->nullable();                                                      // Tare Weight
            $table->double('net_weight');                                                                   // Net Weight
            $table->double('rate');                                                                         // Rate per metric_ton
            $table->double('hsd')->nullable();                                                              // HSD Advance
            $table->double('cash')->nullable();                                                             // Cash Advance Amount

            $table->string('market_vehicle_number')->nullable();                                             // Market Vehicle Number
            $table->string('party_name')->nullable();                                                        // Party Name
            $table->string('party_number')->nullable();                                                      // Party Number

            $table->string('driver_name')->nullable();                                                      // Driver Name
            $table->string('driver_phone_num')->nullable();                                                 // Driver Phone Number
            $table->string('driver_license_num')->nullable();                                               // Driver License Number

            $table->double('premium_rate')->nullable();                                                     // Premium Rate per metric_ton
            $table->double('total_amount')->nullable();                                                     // Total Amount (net_weight * rate)
            $table->double('cash_adv_pct')->nullable();                                                     // Percentage deducted giving cash
            $table->double('cash_adv_fees')->default(0)->nullable();                                // Cash adv after minus
            $table->boolean('tds_sbm_bool')->default(0)->nullable();                                // Did the person submit TDS?
            $table->double('tds')->default(0)->nullable();                                          // Amount to deduct if TDS not given
            $table->foreignId('tax_category_id')->nullable()->constrained('tax_categories');        // Tax Category Id
            $table->mediumInteger('two_pay')->nullable();                                                   // 2 Pay
            $table->double('final_payable')->nullable();                                                    // Final Payable
            $table->foreignId('payment_id')->nullable()->constrained('payments');                   // Tax Category Id
            $table->double('profit')->nullable();

            $table->foreignId('market_vehicle_id')->nullable()->constrained('market_vehicles');     // Market Vehicle Number
            $table->foreignId('fleet_vehicle_id')->nullable()->constrained('fleet_vehicles');       // Fleet Vehicle Number
            $table->foreignId('fleet_driver_id')->nullable()->constrained('employees');             // Fleet Vehicle Driver ID
            $table->foreignId('party_id')->nullable()->constrained('parties');                      // Party ID
            $table->foreignId('agent_id')->nullable()->constrained('agents');                       // Agent ID

            $table->boolean('loading_done')->default(0);                                            // Loading Step
            $table->boolean('payment_done')->default(0);                                            // Payment Done
            $table->boolean('completed')->default(0);                                               // Loading Step

            $table->foreignId('created_by')->nullable()->constrained('users');                      // Created By
            $table->foreignId('finished_by')->nullable()->constrained('users');                     // Managed By
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
