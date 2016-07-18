<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users__books', function(Blueprint $table)
		{
			$table->string('Uid');
			$table->primary('Uid');
			$table->string('UName');
			$table->string('Age');
			$table->string('Sex');
			$table->string('Qualification');
			$table->string('Email_Id');
			$table->date('Date_of_Birth');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users__books');
	}

}
