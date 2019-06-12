<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPatientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('patient', function(Blueprint $table)
		{
			$table->foreign('age_id', 'age_id')->references('id')->on('age_group')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('gender_id', 'gender_id')->references('id')->on('gender')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('weight_id', 'weight_id')->references('id')->on('weight_range')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('patient', function(Blueprint $table)
		{
			$table->dropForeign('age_id');
			$table->dropForeign('gender_id');
			$table->dropForeign('weight_id');
		});
	}

}
