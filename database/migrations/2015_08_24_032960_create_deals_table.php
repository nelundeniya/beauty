<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('service_id')->unsigned();
			$table->foreign('service_id')
				->references('id')->on('services')
				->onDelete('cascade');
			$table->string('title');
			$table->text('description');
			$table->decimal('price', 6, 2);
			$table->decimal('discount', 6, 2);
			$table->decimal('saving', 6, 2);
			$table->dateTime('expires');
			$table->string('email', 100);
			$table->string('phone', 20);
			$table->string('image', 100)->nullable();
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
		Schema::drop('deals');
	}

}
