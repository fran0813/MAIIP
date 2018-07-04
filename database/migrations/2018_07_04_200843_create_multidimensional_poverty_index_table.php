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
            $table->double('altTasDepEco', 5, 2);
            $table->double('ana', 5, 2);
            $table->double('bajLogEdu', 5, 2);
            $table->double('barAccSerSal', 5, 2);
            $table->double('barAccSerCiu', 5, 2);
            $table->double('empInf', 5, 2);
            $table->double('hac', 5, 2);
            $table->double('inaEliExc', 5, 2);
            $table->double('inaEsc', 5, 2);
            $table->double('parIna', 5, 2);
            $table->double('pisIna', 5, 2);
            $table->double('rezEsc', 5, 2);
            $table->double('sinAccFueAgMej', 5, 2);
            $table->double('sinAseSal', 5, 2);
            $table->double('traInf', 5, 2);
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
