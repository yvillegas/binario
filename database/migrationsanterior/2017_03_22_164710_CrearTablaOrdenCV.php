<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOrdenCV extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_ordencv', function(Blueprint $table)
		{
			$table->increments('ocv_id');
			$table->string('ocv_nro');
			$table->date('ocv_fecha');
			$table->string('ocv_est');
			$table->decimal('ocv_subt',12,2);
			$table->decimal('ocv_igv',12,2);
			$table->decimal('ocv_tot',12,2);
			$table->string('ocv_cond');
			$table->decimal('ocv_tipcambio',12,3);
			$table->string('ocv_moneda');
			$table->string('ocv_tipo');
			$table->integer('ent_id')->unsigned();
			$table->foreign('ent_id')->references('ent_id')->on('t_entidad');
			$table->string('ocv_doc');
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
		Schema::drop('t_ordencv');
	}

}
