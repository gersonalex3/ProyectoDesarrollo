<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FechaTorneos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FechadeTorneos', function (Blueprint $table) {
            $table->engine ="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('Torneo_id')->unsigned();
            $table->String('NumerodeJornada');
            $table->date('FechadeJuego');
            $table->timestamps();
            $table->foreign('Torneo_id')->references('id')->on('Torneos')->onDelete("cascade");
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
