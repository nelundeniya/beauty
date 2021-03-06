<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				->references('id')->on('users')
				->onDelete('cascade');
			$table->string('type', 20);
			$table->string('service_name');
			$table->text('description')->nullable();
			$table->string('abn', 20)->nullable();
			$table->string('phone', 20);
			$table->string('mobile', 20)->nullable();
			$table->string('fax', 20)->nullable();
			$table->string('email', 100)->nullable();
			$table->string('website', 100)->nullable();
			$table->string('address')->nullable();
			$table->string('suburb', 50);
			$table->string('postcode', 20);
			$table->string('state', 20);
			$table->integer('city_id')->unsigned();
			$table->foreign('city_id')
				->references('id')->on('cities');
			$table->string('facebook')->nullable();
			$table->string('twitter')->nullable();
			$table->string('google')->nullable();
			$table->string('logo')->nullable();
			$table->string('status', 20);
			$table->string('slug')->unique();
			$table->decimal('rating', 2, 1)->default(0.0);
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
		Schema::drop('services');
	}

}
