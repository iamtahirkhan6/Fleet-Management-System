<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->double('salary')->default(0)->nullable();
            $table->string('email')->unique()->nullable();
            $table->foreignId('office_id')->constrained('offices');
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('employee_designation_id')->constrained('employees_designations');
            $table->boolean('is_currently_hired')->default(0)->nullable();
            // $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
