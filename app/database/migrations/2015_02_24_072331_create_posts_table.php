<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table("posts", function(Blueprint $table)
		{
			$table->increments('post_id');
			$table->string('title');
			$table->text('content');
			$table->integer('author_id');
			$table->string('tags');
			$table->string('category');
			$table->bigInteger('views');
			$table->timestamps();
			$table->primary('post_id');
			$table->foreign('author_id')
				->references('user_id')->on('users')
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
		Schema::table('posts', function(Blueprint $table)
		{
			//
		});
	}

}
