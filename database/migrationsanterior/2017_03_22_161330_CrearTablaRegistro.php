<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRegistro extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_registro', function(Blueprint $table)
		{
			$table->increments('reg_id');
			$table->string('reg_fecha');
			$table->string('reg_estado');
			$table->string('reg_obs');
			$table->integer('carro_id')->unsigned();
			$table->foreign('carro_id')->references('carro_id')->on('t_carrito');
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
		Schema::drop('t_registro');
	}

}
