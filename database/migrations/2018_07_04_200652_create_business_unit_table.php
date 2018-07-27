<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UnidadComercial', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->integer('uniCom')->comment('Unidades comerciales');
            $table->integer('uniSer')->comment('Unidades de servicios');
            $table->integer('uniGraCom')->comment('Unidades grande comerciales');
            $table->integer('uniGraInd')->comment('Unidades grande industria');
            $table->integer('uniGraSer')->comment('Unidades grande servicios');
            $table->integer('uniInd')->comment('Unidades industriales');
            $table->integer('uniMedCom')->comment('Unidades mediana comerciales');
            $table->integer('uniMedInd')->comment('Unidades mediana industria');
            $table->integer('uniMedSer')->comment('Unidades mediana servicios');
            $table->integer('uniMicCom')->comment('Unidades micro comerciales');
            $table->integer('uniMicInd')->comment('Unidades micro industria');
            $table->integer('uniMicSer')->comment('Unidades micro servicios');
            $table->integer('uniPeqCom')->comment('Unidades pequeña comerciales');
            $table->integer('uniPeqInd')->comment('Unidades pequeña industria');
            $table->integer('uniPeqSer')->comment('Unidades pequeña Servicios');
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
        Schema::dropIfExists('UnidadComercial');
    }
}
