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
            $table->increments('id');
            $table->dateTime('anioE')->unique();
            $table->integer('rurJardin');
            $table->integer('urbJardin');
            $table->integer('rurTrans');
            $table->integer('urbTrans');
            $table->integer('rurPrim');
            $table->integer('urbPrim');
            $table->integer('rurSecu');
            $table->integer('urbSecu');
            $table->integer('rurMedia');
            $table->integer('urbMedia');
            $table->integer('municipio_id')->unsigned();
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
