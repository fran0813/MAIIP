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
            $table->increments('id')->comment('Llave primaria');
            $table->double('autGasFun', 14, 4)->comment('Auto financiación de los gastos de funcionamiento');
            $table->double('respSerDeu', 14, 4)->comment('Respaldo del servicio de la deuda');
            $table->double('depTraNacReg', 14, 4)->comment('Dependencia de las transferencias de la nación y las regalías');
            $table->double('genRecPro', 14, 4)->comment('Generación de recursos propios');
            $table->double('magInv', 14, 4)->comment('Magnitud de la inversión');
            $table->double('capAho', 14, 4)->comment('Capacidad de ahorro');
            $table->double('indDesFis', 14, 4)->comment('Indicador de desempeño fiscal');
            $table->integer('posNivNac')->comment('Posición a nivel nacional');
            $table->integer('posNivDep')->comment('Posición a nivel departamento');                     
            $table->integer('finanza_id')->unsigned()->comment('Llave foránea a finanza');
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
