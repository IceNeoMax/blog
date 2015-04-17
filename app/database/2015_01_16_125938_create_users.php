<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("users",function($table){
			$table->Increments('user_id');
			$table->string('username');
			$table->string('password');
			$table->string('email');
			$table->date('birthday');
			$table->text('description');
			$table->timestamps();
			$table->primary('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
