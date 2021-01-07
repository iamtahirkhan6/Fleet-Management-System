<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFleetLivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fleet_lives', function (Blueprint $table) {
            $table->id();
            $table->string('outtype')->nullable();
            $table->string('ttime')->nullable();
            $table->string('rectime')->nullable();
            $table->string('trips')->nullable();
            $table->string('rdev')->nullable();
            $table->string('mineral')->nullable();
            $table->string('sourcecode')->nullable();
            $table->string('lessycode')->nullable();
            $table->string('vehiclespeed')->nullable();
            $table->string('ignumber')->nullable();
            $table->string('gpsstatus')->nullable();
            $table->string('circle')->nullable();
            $table->string('starttime')->nullable();
            $table->string('endtime')->nullable();
            $table->string('destination')->nullable();
            $table->string('routename')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('imeino')->nullable();
            $table->string('etpno')->nullable();
            $table->string('vehcount')->nullable();
            $table->string('tripcount')->nullable();
            $table->string('vehicleno')->nullable();
            $table->string('outtime')->nullable();
            $table->string('intime')->nullable();
            $table->string('rdevstarttime')->nullable();
            $table->string('rdevendtime')->nullable();
            $table->string('rdevtime')->nullable();
            $table->string('pollingtime')->nullable();
            $table->string('company')->nullable();
            $table->string('destcode')->nullable();
            $table->string('time')->nullable();
            $table->string('index')->nullable();
            $table->string('source')->nullable();
            $table->string('status')->nullable();
            $table->string('location')->nullable();
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
        Schema::dropIfExists('fleet_lives')->nullable();
    }
}
