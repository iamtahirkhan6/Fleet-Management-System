<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartiesBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('party_id')->references('id')->on('parties');
            $table->string('acc_name')->nullable();
            $table->string('bank_number')->unique();
            $table->string('ifsc');
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
        Schema::dropIfExists('parties_bank_accounts');
    }
}
