<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentByLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MatriculaPorNivel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jardin');
            $table->integer('trans');
            $table->integer('prim');
            $table->integer('secu');
            $table->integer('media');
            $table->integer('educacion_id')->unsigned();
            $table->foreign('educacion_id')->references('id')->on('Educacion');
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
        Schema::dropIfExists('MatriculaPorNivel');
    }
}
