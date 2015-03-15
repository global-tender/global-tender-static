<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seminars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('city_id');
			$table->date('date');
			$table->string('time');
			$table->string('price');
			$table->string('contact_person');
			$table->string('phone');
			$table->string('mail');
			$table->integer('desc_id');
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
		Schema::drop('seminars');
	}

}
