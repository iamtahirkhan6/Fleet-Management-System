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
