<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCruceAreaTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruce_area_test_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idUsuario');
            $table->bigInteger('idArea1');
            $table->bigInteger('idArea2');
            $table->bigInteger('idArea3'); 
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
        Schema::dropIfExists('cruce_area_test_results');
    }
}
