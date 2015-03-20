<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('choices', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('question_id')->unsigned()->nullable();

			$table->text('content');

			$table->enum('status', array('fait','pas fait'))->default('pas fait');

			$table->enum('reponse', array('oui','non'))->default('oui');

			$table->timestamps();

			$table->foreign('question_id')->references('id')->on('questions')
				->onDelete('SET NULL');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropifExists('choices');
	}

}
