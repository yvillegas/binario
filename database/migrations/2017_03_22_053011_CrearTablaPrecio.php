<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPrecio extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_precio', function(Blueprint $table)
		{
			$table->increments('prec_id');
			$table->decimal('prec_compra',12,2);
			$table->decimal('prec_venta',12,2);
			$table->decimal('prec_promo',12,2);
			$table->decimal('prec_especial',12,2);
			$table->integer('prod_id')->unsigned();
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
		Schema::drop('t_precio');
	}

}
