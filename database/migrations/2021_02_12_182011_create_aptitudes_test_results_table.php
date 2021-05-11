<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAptitudesTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aptitudes_test_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userId');
            $table->bigInteger('testId');
            $table->bigInteger('clasificacionId1');
            $table->bigInteger('clasificacionId2');
            $table->bigInteger('clasificacionId3');
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
        Schema::dropIfExists('aptitudes_test_results');
    }
}
