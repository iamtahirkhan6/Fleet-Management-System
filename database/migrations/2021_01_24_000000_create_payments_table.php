<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->double('amount');
            $table->foreignId('bank_account_id')->constrained('bank_accounts');
            $table->foreignId('payment_method_id')->constrained('payment_methods');
            $table->foreignId('payment_status_id')->constrained('payment_statuses');
            $table->double('fees')->nullable();
            $table->multiLineString('remarks')->nullable();
            $table->string('utr_number')->nullable();
            $table->string('razorpay_payout_id')->nullable();
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('finished_by')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
