<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            /* Generales */
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('edad');
            $table->string('sexo');
            /* Preguntas */
            $table->string('deportes');
            $table->string('musica');
            $table->string('pintor_famoso');
            $table->string('desc_musica_clasica');
            $table->string('interprete');
            $table->string('museos');
            $table->string('gustos_lectura');
            $table->string('tiempo_lectura');
            $table->string('gusto_videojuegos', 1000);
            $table->string('personaje_1');
            $table->string('personaje_2');
            $table->string('personaje_3');
            /* Test de memoria 
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');*/
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
        Schema::dropIfExists('encuestas');
    }
}
