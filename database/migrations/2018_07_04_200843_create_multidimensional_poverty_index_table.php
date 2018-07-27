<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultidimensionalPovertyIndexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IndicePobrezaMultidimensional', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->double('altTasDepEco', 14, 4)->comment('Alta tasa de dependencia económica');
            $table->double('ana', 14, 4)->comment('Analfabetismo');
            $table->double('bajLogEdu', 14, 4)->comment('Bajo logro educativo');
            $table->double('barAccSerSal', 14, 4)->comment('Barreras de acceso a servicio de salud');
            $table->double('barAccSerCiu', 14, 4)->comment('Barreras de acceso a servicios para cuidado de la primera infancia');
            $table->double('empInf', 14, 4)->comment('Empleo informal');
            $table->double('hac', 14, 4)->comment('Hacinamiento');
            $table->double('inaEliExc', 14, 4)->comment('Inadecuada eliminación de excretas');
            $table->double('inaEsc', 14, 4)->comment('Inasistencia escolar');
            $table->double('parIna', 14, 4)->comment('Paredes inadecuadas');
            $table->double('pisIna', 14, 4)->comment('Pisos inadecuados');
            $table->double('rezEsc', 14, 4)->comment('Rezago escolar');
            $table->double('sinAccFueAgMej', 14, 4)->comment('Sin acceso a fuente de agua mejorada');
            $table->double('sinAseSal', 14, 4)->comment('Sin aseguramiento en salud');
            $table->double('traInf', 14, 4)->comment('Trabajo infantil');
            $table->integer('economicosocial_id')->unsigned()->comment('Llave foránea a economicosocial');
            $table->foreign('economicosocial_id')->references('id')->on('EconomicoSocial');
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
        Schema::dropIfExists('IndicePobrezaMultidimensional');
    }
}
