<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOperacion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_operacion', function(Blueprint $table)
		{
			$table->increments('ope_id');
			$table->integer('ope_tipo');
			$table->integer('comp_id')->unsigned();
			$table->integer('ext_id')->unsigned();
			$table->foreign('comp_id')->references('comp_id')->on('t_comprobante');
			$table->foreign('ext_id')->references('ext_id')->on('t_externo');
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
		Schema::drop('t_operacion');
	}

}
