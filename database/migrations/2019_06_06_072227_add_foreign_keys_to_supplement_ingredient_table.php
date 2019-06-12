<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSupplementIngredientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supplement_ingredient', function(Blueprint $table)
		{
			$table->foreign('micro_nutrient_id', 'micro_nutrient_id')->references('id')->on('micro_nutrient')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('supplement_id', 'supplement_id')->references('id')->on('supplement')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supplement_ingredient', function(Blueprint $table)
		{
			$table->dropForeign('micro_nutrient_id');
			$table->dropForeign('supplement_id');
		});
	}

}
