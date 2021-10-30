<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jugadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   Schema::create('jugadores', function (Blueprint $table) {
        
        $table->engine = 'InnoDB';
        $table->bigIncrements('id');
        $table->string('Nombre');
        $table->string('Apellido');
        $table->string('DPI');
        $table->string('FotoDPI');
        $table->string('NumeroCamisola');
        $table->date('FechadeNacimiento');
        $table->bigInteger('equipos_id')->unsigned();
        $table->timestamps();
        $table->foreign('equipos_id')->references('id')->on('equipos')->onDelete('cascade');
        
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
