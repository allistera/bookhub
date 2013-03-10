<?php

class Create_Votes_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votes', function($table)
		{	
			$table->engine = 'InnoDB';
			
			$table->increments('id');
			$table->integer('ebook_id')->unsigned();
			$table->string('user_guid');
			$table->integer('type');
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
		Schema::drop('votes');
	}

}