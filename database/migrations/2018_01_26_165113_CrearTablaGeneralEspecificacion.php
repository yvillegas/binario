<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaGeneralEspecificacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_generalespecificacion', function(Blueprint $table)
        {
            $table->increments('gesp_id');
            $table->string('gesp_desc');
            $table->integer('prod_id')->unsigned();
            $table->foreign('prod_id')->references('prod_id')->on('t_precio');
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
        Schema::drop('t_generalespecificacion');
    }
}
