<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripPaymentTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_payment_transactions', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('party_id')->references('id')->on('parties');

            $table->double('amount')->default(0);

            $table->foreignId('parties_bank_account_id')->references('id')->on('parties_bank_accounts');

            $table->foreignId('trip_id')->references('id')->on('trips');

            $table->boolean('status');
            
            $table->foreignId('payment_method_id')->references('id')->on('payment_methods');

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
        Schema::dropIfExists('trip_payment_transactions');
    }
}
