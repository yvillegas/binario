<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDEspecificacion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_despecificacion', function(Blueprint $table)
		{
			$table->increments('desp_id');
			$table->string('desp_valor');
			$table->integer('esp_id')->unsigned();
			$table->integer('prod_id')->unsigned();
			$table->foreign('esp_id')->references('esp_id')->on('t_especificacion');
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
		Schema::drop('t_despecificacion');
	}

}
