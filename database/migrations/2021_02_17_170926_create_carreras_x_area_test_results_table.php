<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasXAreaTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras_x_area_test_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idUsuario');
            $table->bigInteger('idArea1')->default(-1);
            $table->bigInteger('idCarrera1')->default(-1);
            $table->bigInteger('idCarrera2')->default(-1);
            $table->bigInteger('idCarrera3')->default(-1);
            $table->bigInteger('idArea2')->default(-1);
            $table->bigInteger('idCarrera4')->default(-1);
            $table->bigInteger('idCarrera5')->default(-1);
            $table->bigInteger('idCarrera6')->default(-1);
            $table->bigInteger('idArea3')->default(-1);
            $table->bigInteger('idCarrera7')->default(-1);
            $table->bigInteger('idCarrera8')->default(-1);
            $table->bigInteger('idCarrera9')->default(-1);
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
        Schema::dropIfExists('carreras_x_area_test_results');
    }
}
