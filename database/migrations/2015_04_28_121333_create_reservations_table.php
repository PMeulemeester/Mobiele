<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservations', function(Blueprint $table)
		{
			$table->engine='innodb';
			$table->increments('id');
			$table->string('carpark');
			$table->dateTime('reservation');
			$table->integer('user_car_id')->unsigned();
			$table->foreign('user_car_id')->references('id')->on('user_cars');
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
		Schema::table('reservations',function(Blueprint $table){
			$table->dropForeign('reservations_user_car_id_foreign');
		});
		Schema::drop('reservations');
	}

}
