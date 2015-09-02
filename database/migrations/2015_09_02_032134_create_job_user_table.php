<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('job_user', function (Blueprint $table) {
    	$table->increments('id');
			$table->integer('job_id')->unsigned();
			$table->foreign('job_id')
				->references('id')->on('jobs')
				->onDelete('cascade');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				->references('id')->on('users')
				->onDelete('cascade');
			$table->string('status', 20);
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
    Schema::table('jobs_users', function (Blueprint $table) {
    	Schema::drop('jobs_users');
    });
  }
}
