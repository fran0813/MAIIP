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
            $table->increments('id')->comment('Llave primaria');
            $table->double('ejeIngTot', 14, 4)->comment('Ingresos totales');
            $table->double('ejeIngCor', 14, 4)->comment('1. ingresos corrientes');
            $table->double('ejeIngTri', 14, 4)->comment('1.1 ingresos tributarios');
            $table->double('ejeIngPre', 14, 4)->comment('1.1.1. predial');
            $table->double('ejeIngIndCom', 14, 4)->comment('1.1.2. industria y comercio');
            $table->double('ejeIngSobGas', 14, 4)->comment('1.1.3. sobretasa a la gasolina');
            $table->double('ejeIngOtr', 14, 4)->comment('1.1.4. otros');
            $table->double('ejeIngNoTri', 14, 4)->comment('1.2. ingresos no tributarios');
            $table->double('ejeIngTra', 14, 4)->comment('1.3. transferencias');
            $table->double('ejeIngNivNac', 14, 4)->comment('1.3.1. del nivel nacional');
            $table->double('ejeIngNoTriOtr', 14, 4)->comment('1.3.2. otras');
            $table->double('ejeGasTot', 14, 4)->comment('Gastos totales');
            $table->double('ejeGasCor', 14, 4)->comment('2. gastos corrientes');
            $table->double('ejeFun', 14, 4)->comment('2.1. funcionamiento');
            $table->double('ejeSerFun', 14, 4)->comment('2.1.1. servicios personales');
            $table->double('ejeGasGen', 14, 4)->comment('2.1.2. gastos generales');
            $table->double('ejeTraPag', 14, 4)->comment('2.1.3. transferencias pagadas (nomina y a entidades)');
            $table->double('ejeIntDeuPub', 14, 4)->comment('2.2. intereses deuda publica');
            $table->double('ejeDefAhoCor', 14, 4)->comment('3. déficit o ahorro corriente (1-2)');
            $table->double('ejeIngCap', 14, 4)->comment('4. ingresos de capital');
            $table->double('ejeReg', 14, 4)->comment('4.1. regalías');
            $table->double('ejeTraNac', 14, 4)->comment('4.2. transferencias nacionales (sgp, etc.)');
            $table->double('ejeCof', 14, 4)->comment('4.3. cofinanciacion');
            $table->double('ejeIngCapOtr', 14, 4)->comment('4.4. otros');
            $table->double('ejeGasCap', 14, 4)->comment('5. gastos de capital (inversión)');
            $table->double('ejeForBruCapFij', 14, 4)->comment('5.1. formación brutal de capital fijo');
            $table->double('ejeGasCapOtr', 14, 4)->comment('5.2. resto inversiones');
            $table->double('ejeDefSupTot', 14, 4)->comment('6. déficit o superávit total (3+4-5)');
            $table->double('ejeFin', 14, 4)->comment('7. financiamiento (7.1 + 7.2)');
            $table->double('ejeCreNet', 14, 4)->comment('7.1. crédito interno y externo (7.1.1 - 7.1.2.)');
            $table->double('ejeDes', 14, 4)->comment('7.1.1. desembolsos (+)');
            $table->double('ejeAmo', 14, 4)->comment('7.1.2. amortizaciones (-)');
            $table->double('ejeRecBalVarDepOtr', 14, 4)->comment('7.2. recursos balance, var. depósitos, otros');
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
        Schema::dropIfExists('EjecucionPresupuesto');
    }
}
