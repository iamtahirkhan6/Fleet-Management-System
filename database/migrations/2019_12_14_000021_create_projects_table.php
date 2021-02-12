<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->foreignId('material_id')->references('id')->on('materials');
            $table->foreignId('loading_point_id')->references('id')->on('loading_points');
            $table->foreignId('unloading_point_id')->references('id')->on('unloading_points');
            $table->foreignId('consignee_id')->references('id')->on('consignees');
            $table->foreignId('company_id')->constrained('companies');
            $table->boolean('status');
            $table->unique(['material_id', 'loading_point_id', 'unloading_point_id', 'consignee_id', 'company_id'], 'unique_project');
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
