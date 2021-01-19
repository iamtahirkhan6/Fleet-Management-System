<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleRCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_rc_details', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique();
            $table->string('model')->nullable();
            $table->string('class')->nullable();
            $table->string('reg_date')->nullable();
            $table->string('puc_upto')->nullable();
            $table->string('rto_code')->nullable();
            $table->string('fuel_norm')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('authority')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('mvtax_upto')->nullable();
            $table->string('noc_details')->nullable();
            $table->string('fitness_upto')->nullable();
            $table->string('roadtax_upto')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('engine_number')->nullable();
            $table->string('insurance_upto')->nullable();
            $table->string('chassis_number')->nullable();
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
        Schema::dropIfExists('vehicle_rc_details');
    }
}
