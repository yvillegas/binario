<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEspecificacion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_especificacion', function(Blueprint $table)
		{
			$table->increments('esp_id');
			$table->string('esp_desc');
			$table->string('esp_abrev');
			$table->string('esp_obs');
			$table->integer('cesp_id')->unsigned();
			$table->foreign('cesp_id')->references('cesp_id')->on('t_cespecificacion');
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
		Schema::drop('t_especificacion');
	}

}
