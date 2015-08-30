<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('service_id')->unsigned();
			$table->foreign('service_id')
				->references('id')->on('services')
				->onDelete('cascade');
			$table->string('title');
			$table->text('description');
			$table->smallInteger('type')->unsigned();
			$table->smallInteger('visa')->unsigned();
			$table->smallInteger('notify')->unsigned();
			$table->dateTime('expires');
			$table->string('email', 100);
			$table->string('phone', 20);
			$table->string('file', 100)->nullable();
			$table->string('slug')->unique();
			$table->string('status', 10);
			$table->integer('views')->unsigned();
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
		Schema::drop('jobs');
	}

}
