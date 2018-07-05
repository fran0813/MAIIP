<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetExecutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EjecucionPresupuesto', function (Blueprint $table) {
            $table->increments('id');
            $table->double('ejeIngTot', 14, 4);
            $table->double('ejeIngCor', 14, 4);
            $table->double('ejeIngTri', 14, 4);
            $table->double('ejeIngPre', 14, 4);
            $table->double('ejeIngIndCom', 14, 4);
            $table->double('ejeIngSobGas', 14, 4);
            $table->double('ejeIngOtr', 14, 4);
            $table->double('ejeIngNoTri', 14, 4);
            $table->double('ejeIngTra', 14, 4);
            $table->double('ejeIngNivNac', 14, 4);
            $table->double('ejeIngNoTriOtr', 14, 4);
            $table->double('ejeGasTot', 14, 4);
            $table->double('ejeGasCor', 14, 4);
            $table->double('ejeFun', 14, 4);
            $table->double('ejeSerFun', 14, 4);
            $table->double('ejeGasGen', 14, 4);
            $table->double('ejeTraPag', 14, 4);
            $table->double('ejeIntDeuPub', 14, 4);
            $table->double('ejeDefAhoCor', 14, 4);
            $table->double('ejeIngCap', 14, 4);
            $table->double('ejeReg', 14, 4);
            $table->double('ejeTraNac', 14, 4);
            $table->double('ejeCof', 14, 4);
            $table->double('ejeIngCapOtr', 14, 4);
            $table->double('ejeGasCap', 14, 4);
            $table->double('ejeForBruCapFij', 14, 4);
            $table->double('ejeGasCapOtr', 14, 4);
            $table->double('ejeDefSupTot', 14, 4);
            $table->double('ejeFin', 14, 4);
            $table->double('ejeCreNet', 14, 4);
            $table->double('ejeDes', 14, 4);
            $table->double('ejeAmo', 14, 4);
            $table->double('ejeRecBalVarDepOtr', 14, 4);
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
        Schema::dropIfExists('EjecucionPresupuesto');
    }
}
