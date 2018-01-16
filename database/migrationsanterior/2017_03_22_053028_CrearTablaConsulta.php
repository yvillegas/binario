<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaConsulta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_consulta', function(Blueprint $table)
		{
			$table->increments('cons_id');
			$table->string('cons_nom');
			$table->string('cons_número');
			$table->string('cons_email');
			$table->date('cons_fecha');
			$table->string('cons_obs');
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
		Schema::drop('t_consulta');
	}

}
