<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('market_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string("number");
            $table->foreignId('party_id')->constrained('parties');
            $table->foreignId('company_id')->constrained('companies');
            $table->unique(['number','party_id','company_id'], 'num_party_comp');
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
        Schema::dropIfExists('vehicles');
    }
}
