<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFleetDailyInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fleet_daily_inspections', function (Blueprint $table) {
            $table->boolean("air_filter")->default(0);
            $table->double("air_filter_charge")->nullable();

            $table->boolean("grease")->default(0);
            $table->double("grease_charge")->nullable();

            $table->boolean("tyre_repair")->default(0);
            $table->double("tyre_repair_charge")->nullable();

            $table->boolean("urea")->default(0);
            $table->double("urea_amount")->nullable();
            $table->double("urea_charge")->nullable();

            $table->boolean("misc")->default(0);
            $table->string("misc_charge")->nullable();
            $table->double("misc_remark")->nullable();
            
            $table->double("total")->nullable();

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
        Schema::dropIfExists('fleet_daily_inspections');
    }
}
