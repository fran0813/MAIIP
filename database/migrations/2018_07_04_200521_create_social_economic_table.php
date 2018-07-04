<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialEconomicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EconomicoSocial', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('anioES')->unique();
            $table->double('numHecSemBos', 5, 2);
            $table->double('areAgrCosTot', 5, 2);
            $table->double('proAgrTot', 5, 2);
            $table->double('proCar', 5, 2);
            $table->integer('invBovTotMac');
            $table->integer('invBovTotHem');
            $table->integer('invBovTot');
            $table->double('incIpmTot', 5, 2);
            $table->double('incIpmRur', 5, 2);
            $table->double('incIpmUrb', 5, 2);
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
        Schema::dropIfExists('EconomicoSocial');
    }
}
