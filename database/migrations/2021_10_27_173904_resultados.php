<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Resultados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Resultados', function (Blueprint $table) {
            $table->engine ="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('Jornada_Id')->unsigned();
            $table->bigInteger('Torneo_Id')->unsigned();
            $table->String('Resultado');
            $table->bigInteger('Gano')->unsigned();
            $table->bigInteger('Perdio')->unsigned();
            $table->timestamps();
            $table->foreign('Torneo_Id')->references('id')->on('Torneos')->onDelete("cascade");
            $table->foreign('Jornada_Id')->references('id')->on('Programaciones')->onDelete("cascade");
            $table->foreign('Gano')->references('id')->on('equipos')->onDelete("cascade");
            $table->foreign('Perdio')->references('id')->on('equipos')->onDelete("cascade");
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
