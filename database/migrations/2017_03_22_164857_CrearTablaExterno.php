<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaExterno extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_externo', function(Blueprint $table)
		{
			$table->increments('ext_id');
			$table->string('ext_comp');
			$table->string('ext_ruc');
			$table->string('ext_rz');
			$table->string('ext_tipo');
			$table->date('ext_fecha');
			$table->string('ext_guia');
			$table->string('ext_moneda');
			$table->decimal('ext_tipcambio',12,3);
			$table->decimal('ext_subt',12,2);
			$table->decimal('ext_tot',12,2);
			$table->decimal('ext_igv',12,2);
			$table->string('ext_tipgasto');
			$table->integer('vend_id')->unsigned();
			$table->foreign('vend_id')->references('vend_id')->on('t_vendedor');
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
		Schema::drop('t_externo');
	}

}
