<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uploads', function(Blueprint $table)
		{
			$table->string('Uid');
			$table->string('Bid');

			$table->dateTime('Uploaded_at');
		});
		Schema::table('uploads', function($table)
{
    $table->foreign('Uid')
        ->references('Uid')->on('users__books')
        ->onDelete('cascade');

    $table->foreign('Bid')
        ->references('Bid')->on('books')
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
		Schema::drop('uploads');
	}

}
