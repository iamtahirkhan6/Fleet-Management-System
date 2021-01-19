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

            $table->foreignId('material_id')->references('id')->on('materials');
            $table->foreignId('mine_id')->references('id')->on('mines');
            $table->foreignId('unloading_point_id')->references('id')->on('unloading_points');
            $table->foreignId('consignee_id')->references('id')->on('consignees');
            $table->foreignId('company_id')->references('id')->on('companies');
            $table->boolean('status');

            $table->unique(['material_id', 'mine_id', 'unloading_point_id', 'consignee_id', 'company_id', 'status'], 'unique_project');
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
