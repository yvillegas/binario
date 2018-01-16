<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDExterno extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_dexterno', function(Blueprint $table)
		{
			$table->increments('dext_id');
			$table->string('dext_desc');
			$table->integer('dext_cant');
			$table->decimal('dext_prec',12,2);
			$table->integer('ext_id')->unsigned();
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
		Schema::drop('t_dexterno');
	}

}
