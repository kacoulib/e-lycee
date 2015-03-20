<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('title', 50);

			$table->integer('post_id')->unsigned()->nullable();

			$table->enum('status',['publish','unpublish','spam'])->default('unpublish');

			$table->string('email', 128)->nullable();

			$table->text('content');

			$table->timestamps();

			$table->foreign('post_id')->references('id')->on('posts')
				->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropifExists('comments');
	}

}
