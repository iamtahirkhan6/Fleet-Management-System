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
            
            $table->unsignedBigInteger('party_id')->nullable();
            $table->foreign('party_id')->references('id')->on('parties');

            $table->double('amount')->default(0);

            $table->unsignedBigInteger('bank_account')->nullable();
            $table->foreign('bank_account')->references('id')->on('parties_bank_accounts');
            
            $table->unsignedBigInteger('trip_id')->nullable();
            $table->foreign('trip_id')->references('id')->on('trips');

            $table->boolean('status');
            
            $table->string('remarks')->nullable();

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
