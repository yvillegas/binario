<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDPromocion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_dpromocion', function(Blueprint $table)
		{
			$table->increments('dprod_id');
			$table->integer('dprod_cant');
			$table->integer('prom_id')->unsigned();
			$table->integer('prod_id')->unsigned();
			$table->foreign('prom_id')->references('prom_id')->on('t_promocion');
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
		Schema::drop('t_dpromocion');
	}

}
