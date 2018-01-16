<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCarrito extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_carrito', function(Blueprint $table)
		{
			$table->increments('carro_id');
			$table->integer('usu_id')->unsigned();
			$table->foreign('usu_id')->references('id')->on('t_usuario');
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
		Schema::drop('t_carrito');
	}

}
