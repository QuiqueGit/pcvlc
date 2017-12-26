<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelevisoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('televisores',function(Blueprint $table){

            $table->increments('id');
            $table->string('nombre');
            $table->string('modelo');
            $table->string('tipo');
            $table->integer('pulgadas');
            $table->integer('unidades');
            $table->string('foto');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('televisores');
    }
}
