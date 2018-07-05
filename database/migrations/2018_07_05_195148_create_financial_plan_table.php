<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PlanFinanciero', function (Blueprint $table) {
            $table->increments('id');
            $table->double('ingTot', 14, 4);
            $table->double('ingCor', 14, 4);
            $table->double('ingTri', 14, 4);
            $table->double('ingPre', 14, 4);
            $table->double('ingIndCom', 14, 4);
            $table->double('ingSobGas', 14, 4);
            $table->double('ingOtr', 14, 4);
            $table->double('ingNoTri', 14, 4);
            $table->double('ingTra', 14, 4);
            $table->double('ingNivNac', 14, 4);
            $table->double('ingNoTriOtr', 14, 4);
            $table->double('gasTot', 14, 4);
            $table->double('gasCor', 14, 4);
            $table->double('fun', 14, 4);
            $table->double('serFun', 14, 4);
            $table->double('gasGen', 14, 4);
            $table->double('traPag', 14, 4);
            $table->double('intDeuPub', 14, 4);
            $table->double('defAhoCor', 14, 4);
            $table->double('ingCap', 14, 4);
            $table->double('reg', 14, 4);
            $table->double('traNac', 14, 4);
            $table->double('cof', 14, 4);
            $table->double('ingCapOtr', 14, 4);
            $table->double('gasCap', 14, 4);
            $table->double('forBruCapFij', 14, 4);
            $table->double('gasCapOtr', 14, 4);
            $table->double('defSupTot', 14, 4);
            $table->double('fin', 14, 4);
            $table->double('creNet', 14, 4);
            $table->double('des', 14, 4);
            $table->double('amo', 14, 4);
            $table->double('recBalVarDepOtr', 14, 4);
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
        Schema::dropIfExists('PlanFinanciero');
    }
}

