<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasXFamiliaTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras_x_familia_test_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idUsuario');
            $table->bigInteger('idFamilia1');
            $table->bigInteger('idCarrera1');
            $table->bigInteger('idCarrera2');
            $table->bigInteger('idCarrera3');
            $table->bigInteger('idFamilia2');
            $table->bigInteger('idCarrera4');
            $table->bigInteger('idCarrera5');
            $table->bigInteger('idCarrera6');
            $table->bigInteger('idFamilia3');
            $table->bigInteger('idCarrera7');
            $table->bigInteger('idCarrera8');
            $table->bigInteger('idCarrera9');
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
        Schema::dropIfExists('carreras_x_familia_test_results');
    }
}
