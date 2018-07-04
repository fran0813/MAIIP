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
            $table->increments('id');
            $table->integer('uniCom');
            $table->integer('uniSer');
            $table->integer('uniGraCom');
            $table->integer('uniGraInd');
            $table->integer('uniGraSer');
            $table->integer('uniInd');
            $table->integer('uniMedCom');
            $table->integer('uniMedInd');
            $table->integer('uniMedSer');
            $table->integer('uniMicCom');
            $table->integer('uniMicInd');
            $table->integer('uniMicSer');
            $table->integer('uniPeqCom');
            $table->integer('uniPeqInd');
            $table->integer('uniPeqSer');
            $table->integer('economicosocial_id')->unsigned();
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
