<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Suspensiones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Suspensiones', function (Blueprint $table) {
            $table->engine ="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('Jugador_Id')->unsigned();
            $table->bigInteger('Jornada_Id')->unsigned();
            $table->bigInteger('Tarjeta_Id')->unsigned();
            $table->String('Motivo');
            $table->String('Estatus');
            $table->timestamps();
            $table->foreign('Jugador_Id')->references('id')->on('Jugadores')->onDelete("cascade");
            $table->foreign('Jornada_Id')->references('id')->on('Programaciones')->onDelete("cascade");
            $table->foreign('Tarjeta_Id')->references('id')->on('Tarjetas')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
