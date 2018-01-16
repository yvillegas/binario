<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDCarrito extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_dcarrito', function(Blueprint $table)
		{
			$table->increments('dcarro_id');
			$table->integer('dcarro_cant');
			$table->integer('carro_id')->unsigned();
			$table->integer('prod_id')->unsigned();
			$table->foreign('carro_id')->references('carro_id')->on('t_carrito');
			$table->foreign('prod_id')->references('prod_id')->on('t_producto');
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
		Schema::drop('t_dcarrito');
	}

}
