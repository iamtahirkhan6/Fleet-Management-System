<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleRCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_r_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique();
            $table->string('owner_name');
            $table->string('reg_date');
            $table->string('model');
            $table->string('fitness_upto');
            $table->string('insurance_upto');
            $table->string('class');
            $table->string('chassis_number');
            $table->string('engine_number');
            $table->string('authority');
            $table->string('rto_code');
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
        Schema::dropIfExists('vehicle_r_c_s');
    }
}
