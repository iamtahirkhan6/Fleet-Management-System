<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFleetVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fleet_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate')->unique();
            $table->string('rto')->nullable();
            $table->string('model')->nullable();
            $table->string('class')->nullable();
            $table->string('color')->nullable();
            $table->string('state')->nullable();
            $table->string('weight')->nullable();
            $table->string('isValid')->nullable();
            $table->string('financer')->nullable();
            $table->string('puc_upto')->nullable();
            $table->string('rto_code')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('fuel_norm')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('mvtax_upto')->nullable();
            $table->string('vehicle_age')->nullable();
            $table->string('price_range')->nullable();
            $table->string('noc_details')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('fitness_upto')->nullable();
            $table->string('roadtax_upto')->nullable();
            $table->string('engine_number')->nullable();
            $table->string('ownership_type')->nullable();
            $table->string('chassis_number')->nullable();
            $table->string('engine_capacity')->nullable();
            $table->string('insurance_expiry')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('registering_authority')->nullable();
            $table->foreignId('fleet_id')->references('id')->on('fleets')->onDelete('cascade');
            $table->foreignId('company_id')->constrained('companies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fleet_vehicles');
    }
}
