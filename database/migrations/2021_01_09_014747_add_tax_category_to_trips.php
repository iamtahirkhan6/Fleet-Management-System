<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTaxCategoryToTrips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->foreignId('project_id')->after('vehicle_id')->constrained('projects');
            $table->foreignId('party_id')->constrained('parties');
            $table->foreignId('agent_id')->constrained('agents');
            $table->nullableMorphs('driver');
            $table->foreignId('tax_category_id')->after('tds_sbm_bool')->constrained('tax_categories');
            $table->foreignId('trip_payment_transaction_id')->nullable()->constrained('trip_payment_transactions');
            $table->foreignId('created_by')->nullable()->constrained('employees');  // Created By
            $table->foreignId('finished_by')->nullable()->constrained('employees'); // Managed By
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
        Schema::table('trips', function (Blueprint $table) {
            //
        });
    }
}
