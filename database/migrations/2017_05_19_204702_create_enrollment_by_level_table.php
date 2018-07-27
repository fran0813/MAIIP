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
            $table->increments('id')->comment('Llave primaria');
            $table->integer('jardin')->comment('Prejardin y jardín');
            $table->integer('trans')->comment('Transición');
            $table->integer('prim')->comment('Primaria');
            $table->integer('secu')->comment('Secundaria');
            $table->integer('media')->comment('Media');
            $table->integer('educacion_id')->unsigned()->comment('Llave foránea a educacion');
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
