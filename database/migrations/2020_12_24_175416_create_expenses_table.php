<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->unsignedBigInteger('expense_category_id');
            $table->foreign('expense_category_id')->references('id')->on('expense_categories');

            $table->unsignedBigInteger('expense_individual_id')->nullable();
            $table->foreign('expense_individual_id')->references('id')->on('expense_individuals');

            $table->unsignedBigInteger('office_id')->nullable();
            $table->foreign('office_id')->references('id')->on('offices');

            $table->unsignedBigInteger('expense_payment_method_id');
            $table->foreign('expense_payment_method_id')->references('id')->on('expense_payment_methods');

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
