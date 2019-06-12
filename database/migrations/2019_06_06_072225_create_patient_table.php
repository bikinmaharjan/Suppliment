<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patient', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('gender_id')->nullable()->index('gender_id');
			$table->integer('age_id')->nullable()->index('age_id');
			$table->integer('weight_id')->nullable()->index('weight_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('patient');
	}

}
