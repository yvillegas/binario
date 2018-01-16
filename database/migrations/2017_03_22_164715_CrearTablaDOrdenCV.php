<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDOrdenCV extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_dordencv', function(Blueprint $table)
		{
			$table->increments('docv_id');
			$table->decimal('docv_cant',12,3);
			$table->decimal('docv_prec',12,2);
			$table->integer('ocv_id')->unsigned();
			$table->integer('prod_id')->unsigned();
			$table->foreign('ocv_id')->references('ocv_id')->on('t_ordencv');
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
		Schema::drop('t_detalleordencv');
	}

}
