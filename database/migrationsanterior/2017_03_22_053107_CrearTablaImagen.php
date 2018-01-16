<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaImagen extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_imagen', function(Blueprint $table)
		{
			$table->increments('img_id');
			$table->string('img_url');
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
		Schema::drop('t_imagen');
	}

}
