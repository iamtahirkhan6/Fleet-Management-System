<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFleetTripCatchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fleet_trip_catchers', function (Blueprint $table) {
            $table->id();
            $table->string('vehicleno');
            $table->string('etpno')->unique();
            $table->string('source')->nullable();
            $table->string('destination')->nullable();
            $table->string('starttime')->nullable();
            $table->string('pollingtime')->nullable();
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
        Schema::dropIfExists('fleet_trip_catchers');
    }
}
