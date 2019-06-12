<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMaxMicroNutrientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('max_micro_nutrient', function(Blueprint $table)
		{
			$table->foreign('micro_nutrient_id', '_max_micro_nutrient_id')->references('id')->on('micro_nutrient')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('age_group_id', 'max_age_id')->references('id')->on('age_group')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('max_micro_nutrient', function(Blueprint $table)
		{
			$table->dropForeign('_max_micro_nutrient_id');
			$table->dropForeign('max_age_id');
		});
	}

}
