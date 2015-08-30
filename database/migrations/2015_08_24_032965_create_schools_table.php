<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schools', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description')->nullable();
			$table->string('phone', 20);
			$table->string('email', 100)->nullable();
			$table->string('website', 100)->nullable();
			$table->string('address')->nullable();
			$table->string('suburb', 50);
			$table->string('postcode', 20);
			$table->string('state', 20);
			$table->integer('city_id')->unsigned();
			$table->foreign('city_id')
				->references('id')->on('cities');
			$table->string('logo')->nullable();
			$table->string('status', 20);
			$table->string('slug')->unique();
			$table->integer('views')->unsigned()->default(0);
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
		Schema::drop('schools');
	}

}
