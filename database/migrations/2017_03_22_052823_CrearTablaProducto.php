<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProducto extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_producto', function(Blueprint $table)
		{
			$table->increments('prod_id');
			$table->string('prod_cod')->unique();
			$table->string('prod_desc');
			$table->string('prod_cond');
			$table->string('prod_obs');
			$table->integer('marca_id')->unsigned();
			$table->integer('cat_id')->unsigned();
			$table->foreign('marca_id')->references('marca_id')->on('t_marca');
			$table->foreign('cat_id')->references('cat_id')->on('t_categoria');
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
		Schema::drop('t_producto');
	}

}
