<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaGvalor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('t_gvalor', function(Blueprint $table)
        {
            $table->increments('gvalor_id');
            $table->string('gvalor_desc');
            $table->string('gvalor_gvalor');
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
        Schema::drop('t_gvalor');
    }
}
