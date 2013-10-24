<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserDetachmentTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_detachment', function($table) {
			$table->integer('user_id')->index();
			$table->integer('detachment_id')->index();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_detachment');
	}

}
