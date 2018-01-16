<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCEspecificacion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_cespecificacion', function(Blueprint $table)
		{
			$table->increments('cesp_id');
			$table->string('cesp_desc');
			$table->string('cesp_abrev');
			$table->string('cesp_obs');
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
		Schema::drop('t_cespecificacion');
	}

}
