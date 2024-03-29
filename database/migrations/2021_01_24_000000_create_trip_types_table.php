<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripTypesTable extends Migration
{
	public function up()
	{
		Schema::create('trip_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('trip_types');
	}
}
