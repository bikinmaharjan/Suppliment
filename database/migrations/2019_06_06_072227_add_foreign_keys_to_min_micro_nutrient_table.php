<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMinMicroNutrientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('min_micro_nutrient', function(Blueprint $table)
		{
			$table->foreign('age_group_id', 'min_age_id')->references('id')->on('age_group')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('micro_nutrient_id', 'min_micro_nutrient_id')->references('id')->on('micro_nutrient')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('min_micro_nutrient', function(Blueprint $table)
		{
			$table->dropForeign('min_age_id');
			$table->dropForeign('min_micro_nutrient_id');
		});
	}

}
