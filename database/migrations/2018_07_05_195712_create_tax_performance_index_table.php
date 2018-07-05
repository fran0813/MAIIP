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
            $table->double('autGasFun', 12, 4);
            $table->double('respSerDeu', 12, 4);
            $table->double('depTraNacReg', 12, 4);
            $table->double('genRecPro', 12, 4);
            $table->double('magInv', 12, 4);
            $table->double('capAho', 12, 4);
            $table->double('indDesFis', 12, 4);
            $table->double('posNivNac', 12, 4);
            $table->double('posNivDep', 12, 4);                     
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
