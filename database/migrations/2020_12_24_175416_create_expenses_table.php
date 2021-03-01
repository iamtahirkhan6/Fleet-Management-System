<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->unsignedBigInteger('amount');
            $table->text('remark')->nullable();
            $table->foreignId('expense_category_id')->constrained('expense_categories');
            $table->foreignId('payee_id')->nullable()->constrained('payees');
            $table->foreignId('office_id')->constrained('offices');
            $table->foreignId('payment_method_id')->constrained('payment_methods');
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
        Schema::dropIfExists('expenses');
    }
}
