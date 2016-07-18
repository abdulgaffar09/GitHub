<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginTablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('login_tables', function(Blueprint $table)
				{
					$table->string('login_id');

					$table->string('password');
				});
		Schema::table('login_tables', function($table)
		{
			$table->foreign('login_id')
				->references('Uid')->on('users__books')
				->onDelete('cascade');

		   
		});
}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('login_tables');
	}

}
