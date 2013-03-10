<?php

class Create_Ebooks_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ebooks', function($table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('author');
			$table->string('publisher');
			$table->date('publish_date');
			$table->text('description');
			$table->string('genre');
			$table->string('file_name');
			$table->string('cover_photo');
			$table->integer('downloads');
			$table->string('uploader');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ebooks');
	}

}