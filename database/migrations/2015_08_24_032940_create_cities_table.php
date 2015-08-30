<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('location', 40);
			$table->string('local_government_area', 30);
			$table->string('urban_area', 35);
			$table->string('state', 5);
			$table->string('postcode', 5);
			$table->decimal('latitude', 8, 5);
			$table->decimal('longitude', 8, 5);
			$table->string('category', 20);
			$table->integer('population')->unsigned();
			$table->decimal('area_sqkm', 8, 2);
			$table->string('time_zone', 20);
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
		Schema::drop('cities');
	}

}
