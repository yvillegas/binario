<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEntidad extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_entidad', function(Blueprint $table)
		{
			$table->increments('ent_id');
			$table->string('ent_ruc',11);
			$table->string('ent_rz');
			$table->string('ent_dir');
			$table->string('ent_tipo');
			$table->string('ent_tel');
			$table->string('ent_cont');
			$table->string('ent_ctel');
			$table->string('ent_dpto');
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
		Schema::drop('t_entidad');
	}

}
