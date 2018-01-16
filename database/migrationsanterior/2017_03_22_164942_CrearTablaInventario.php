<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaInventario extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_inventario', function(Blueprint $table)
		{
			$table->increments('inv_id');
			$table->integer('inv_cant');
			$table->dateTime('inv_fecha');
			$table->integer('prod_id')->unsigned();
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
		Schema::drop('t_inventario');
	}

}
