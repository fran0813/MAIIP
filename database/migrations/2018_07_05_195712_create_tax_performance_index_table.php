<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxPerformanceIndexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IndiceDesempeñoFiscal', function (Blueprint $table) {
            $table->increments('id');
            $table->double('autGasFun', 14, 4);
            $table->double('respSerDeu', 14, 4);
            $table->double('depTraNacReg', 14, 4);
            $table->double('genRecPro', 14, 4);
            $table->double('magInv', 14, 4);
            $table->double('capAho', 14, 4);
            $table->double('indDesFis', 14, 4);
            $table->double('posNivNac', 14, 4);
            $table->double('posNivDep', 14, 4);                     
            $table->integer('finanza_id')->unsigned();
            $table->foreign('finanza_id')->references('id')->on('Finanza');
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
        Schema::dropIfExists('IndiceDesempeñoFiscal');
    }
}
