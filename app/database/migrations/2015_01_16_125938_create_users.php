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
			$table->Increments("user_id");
			$table->string("username");
			$table->string("password");
			$table->string("email");
			$table->string("description");
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
		// Schema::drop("user");
		// Schema::drop("user1");
		// Schema::drop("user2");

	}

}
