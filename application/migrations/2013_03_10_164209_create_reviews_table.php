<?php

class Create_Reviews_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function($table)
		{
			$table->engine = 'InnoDB';
			
			$table->increments('id');
			$table->integer('ebook_id')->unsigned();
			$table->string('user');
			$table->string('review_title');
			$table->text('review_content');
			$table->timestamps();
			
			$table->foreign('ebook_id')->references('id')->on('ebooks');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reviews');
	}

}