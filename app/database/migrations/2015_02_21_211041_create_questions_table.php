<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('title', 50);

			$table->integer('class_id')->unsigned()->nullable();

			$table->integer('nb_questions')->unsigned()->nullable();

			$table->text('content');

			$table->enum('status', array('publish','unpublish'))->default('publish');

			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropifExists('questions');
	}

}
