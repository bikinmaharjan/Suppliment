<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupplementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supplement', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('company_id')->nullable()->index('company_id');
			$table->string('name', 145)->nullable();
			$table->text('description')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('supplement');
	}

}
