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
            $table->increments('id');
            $table->double('altTasDepEco', 14, 4);
            $table->double('ana', 14, 4);
            $table->double('bajLogEdu', 14, 4);
            $table->double('barAccSerSal', 14, 4);
            $table->double('barAccSerCiu', 14, 4);
            $table->double('empInf', 14, 4);
            $table->double('hac', 14, 4);
            $table->double('inaEliExc', 14, 4);
            $table->double('inaEsc', 14, 4);
            $table->double('parIna', 14, 4);
            $table->double('pisIna', 14, 4);
            $table->double('rezEsc', 14, 4);
            $table->double('sinAccFueAgMej', 14, 4);
            $table->double('sinAseSal', 14, 4);
            $table->double('traInf', 14, 4);
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
        Schema::dropIfExists('IndicePobrezaMultidimensional');
    }
}
