<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consolas',function(Blueprint $table){

            $table->increments('id');
            $table->string('nombre');
            $table->string('modelo');
            $table->string('tipo');
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
        Schema::dropIfExists('consolas');
    }
}
