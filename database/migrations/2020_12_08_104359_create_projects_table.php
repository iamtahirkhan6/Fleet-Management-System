<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();

            $table->unsignedBigInteger('material');
            $table->foreign('material')->references('id')->on('materials');

            $table->unsignedBigInteger('source');
            $table->foreign('source')->references('id')->on('mines');

            $table->unsignedBigInteger('destination');
            $table->foreign('destination')->references('id')->on('unloading_points');

            $table->unsignedBigInteger('consignee');
            $table->foreign('consignee')->references('id')->on('consignees');

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            
            $table->boolean('status');
            
            $table->unique(['material', 'source', 'destination', 'consignee', 'company_id', 'status'], 'unique_project');
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
        Schema::dropIfExists('projects');
    }
}
