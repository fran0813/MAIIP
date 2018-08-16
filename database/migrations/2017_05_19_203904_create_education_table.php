<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Educacion', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->dateTime('anioE')->comment('Año educación');
            $table->integer('rurJardin')->comment('Rural prejardin y jardín');
            $table->integer('urbJardin')->comment('Urbano prejardin y jardín');
            $table->integer('rurTrans')->comment('Rural transición');
            $table->integer('urbTrans')->comment('Urbano transición');
            $table->integer('rurPrim')->comment('Rural primaria');
            $table->integer('urbPrim')->comment('Urbano primaria');
            $table->integer('rurSecu')->comment('Rural secundaria');
            $table->integer('urbSecu')->comment('Urbano secundaria');
            $table->integer('rurMedia')->comment('Rural media');
            $table->integer('urbMedia')->comment('Urbano media');
            $table->integer('municipio_id')->unsigned()->comment('Llave foránea a municipio');
            $table->foreign('municipio_id')->references('id')->on('Municipios');
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
        Schema::dropIfExists('Educacion');
    }
}
