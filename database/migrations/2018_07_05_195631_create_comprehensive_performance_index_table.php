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
            $table->increments('id');
            $table->double('desIntCapAdm', 12, 4);
            $table->double('desIntEfiTot', 12, 4);
            $table->double('desIntGes', 12, 4);
            $table->double('desIntIndInt', 12, 4);
            $table->double('desIntReqLeg', 12, 4);
            $table->double('desIntIndDesFis', 12, 4);            
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
        Schema::dropIfExists('IndiceDesempeñoIntegral');
    }
}
