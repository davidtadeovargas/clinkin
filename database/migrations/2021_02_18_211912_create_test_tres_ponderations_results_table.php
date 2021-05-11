<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTresPonderationsResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_tres_ponderations_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userId');
            $table->integer('areaId1');
            $table->integer('areaId2');
            $table->integer('areaId3');
            $table->integer('familiaId1');
            $table->integer('familiaId2');
            $table->integer('familiaId3');
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
        Schema::dropIfExists('test_tres_ponderations_results');
    }
}
