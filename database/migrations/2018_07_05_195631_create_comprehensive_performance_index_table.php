<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprehensivePerformanceIndexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IndiceDesempeñoIntegral', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->double('desIntCapAdm', 14, 4)->comment('Desempeño integral capacidad administrativa');
            $table->double('desIntEfiTot', 14, 4)->comment('Desempeño integral eficacia total');
            $table->double('desIntGes', 14, 4)->comment('Desempeño integral gestión');
            $table->double('desIntIndInt', 14, 4)->comment('Desempeño integral indice integral');
            $table->double('desIntReqLeg', 14, 4)->comment('Desempeño integral requisitos legales');
            $table->double('desIntIndDesFis', 14, 4)->comment('Desempeño integral indicador de desempeño fiscal');            
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
        Schema::dropIfExists('IndiceDesempeñoIntegral');
    }
}
