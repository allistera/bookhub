<?php

class Create_History_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('history', function($table)
		{	
			$table->engine = 'InnoDB';
			
			$table->increments('id');
			$table->integer('ebook_id')->unsigned();
			$table->string('user_guid');
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
		Schema::drop('history');
	}

}