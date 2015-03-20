<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('roles', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('user_id')->unsigned()->nullable();

			$table->string('role_name', 128);

			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users')
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
		Schema::dropifExists('roles');
	}

}