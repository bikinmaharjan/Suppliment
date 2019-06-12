<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupplementIngredientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supplement_ingredient', function(Blueprint $table)
		{
			$table->integer('supplement_id')->nullable()->index('supplement_id');
			$table->integer('micro_nutrient_id')->nullable()->index('micro_nutrient_id');
			$table->float('amount', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('supplement_ingredient');
	}

}
