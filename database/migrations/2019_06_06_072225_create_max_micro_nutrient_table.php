<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaxMicroNutrientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('max_micro_nutrient', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('micro_nutrient_id')->index('_max_micro_nutrient_id');
			$table->integer('age_group_id')->nullable()->index('max_age_id');
			$table->float('max_limit', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('max_micro_nutrient');
	}

}
