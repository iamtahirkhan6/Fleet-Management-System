<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->date('issue_date');
            $table->date('due_date')->nullable();

            $table->string('invoice_number');
            $table->json('items');
            $table->string('reference_number')->nullable();


            $table->text('notes')->nullable();
            $table->boolean('reverse_charge_basis')->nullable();

            $table->unsignedBigInteger('amount_tax');
            $table->unsignedBigInteger('amount_subtotal');
            $table->unsignedBigInteger('amount_total');
            $table->unsignedBigInteger('amount_paid')->nullable();
            $table->unsignedBigInteger('amount_due')->nullable();

            $table->foreignId('invoice_status_id')->constrained('invoice_statuses');

            $table->foreignId('consignee_id')->constrained('consignees');
            $table->foreignId('bank_account_id')->constrained('bank_accounts');
            $table->foreignId('company_id')->constrained('companies');
            $table->text('invoice_path')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
