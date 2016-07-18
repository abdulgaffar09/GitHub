  	<?php

	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateViewsHistoriesTable extends Migration {

		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('views__histories', function(Blueprint $table)
			{
				$table->string('Uid');

				$table->string('Bid');

				$table->dateTime('View_date');
				$table->string('rating');

			});
			Schema::table('views__histories', function($table)
			{
			    $table->foreign('Uid')
			        ->references('Uid')
			        ->on('users__books');
			   

			    $table->foreign('Bid')
			        ->references('Bid')
			        ->on('books');
			});

		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::drop('views__histories');
		}

	}
