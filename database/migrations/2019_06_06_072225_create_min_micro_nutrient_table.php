<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMinMicroNutrientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('min_micro_nutrient', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('micro_nutrient_id')->index('min_micro_nutrient_id');
			$table->integer('age_group_id')->nullable()->index('min_age_id');
			$table->float('min_limit', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('min_micro_nutrient');
	}

}
