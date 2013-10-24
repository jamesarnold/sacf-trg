<?php

use Illuminate\Database\Migrations\Migration;

class CreateCompanyDetachmentTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_detachment', function($table) {
			$table->integer('company_id')->index();
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
		Schema::drop('company_detachment');
	}

}
