<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasXCarreraXAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas_x_carrera_x_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('idFamilia');
            $table->bigInteger('idArea');
            $table->integer('bloque');
            $table->string('pregunta');
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
        Schema::dropIfExists('preguntas_x_carrera_x_areas');
    }
}
