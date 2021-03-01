<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGstDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gst_details', function (Blueprint $table) {
            $table->id();
            $table->string('gstn')->unique();
            $table->string('legal_name')->nullable();
            $table->string('trade_name')->nullable();
            $table->string('taxpayer_type')->nullable();
            $table->string('reg_date')->nullable();
            $table->string('state_code')->nullable();
            $table->string('nature')->nullable();
            $table->string('jurisdiction')->nullable();
            $table->string('business_type')->nullable();
            $table->string('last_update')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('pin')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('status')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gst_details');
    }
}
