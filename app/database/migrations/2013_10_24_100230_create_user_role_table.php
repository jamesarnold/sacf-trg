<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserRoleTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_role',	function($table) {
			$table->integer('user_id')->index();
			$table->integer('role_id')->index();
			$table->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_role');
	}

}
