<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDComprobante extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_dcomprobante', function(Blueprint $table)
		{
			$table->increments('dcomp_id');
			$table->integer('dcomp_cant');
			$table->decimal('dcomp_prec',12,2);
			$table->integer('comp_id')->unsigned();
			$table->integer('prod_id')->unsigned();
			$table->foreign('comp_id')->references('comp_id')->on('t_comprobante');
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
		Schema::drop('t_dcomprobante');
	}

}
