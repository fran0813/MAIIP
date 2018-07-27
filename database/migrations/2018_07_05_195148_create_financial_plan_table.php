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
            $table->increments('id')->comment('Llave primaria');
            $table->double('ingTot', 14, 4)->comment('Plan financiero municipios ingresos totales');
            $table->double('ingCor', 14, 4)->comment('Plan financiero municipios 1. ingresos corrientes');
            $table->double('ingTri', 14, 4)->comment('Plan financiero municipios 1.1. ingresos tributarios');
            $table->double('ingPre', 14, 4)->comment('Plan financiero municipios 1.1.1. predial');
            $table->double('ingIndCom', 14, 4)->comment('Plan financiero municipios 1.1.2. industria y comercio');
            $table->double('ingSobGas', 14, 4)->comment('Plan financiero municipios  1.1.3. sobretasas a la gasolina');
            $table->double('ingOtr', 14, 4)->comment('Plan financiero municipios 1.1.4. otros');
            $table->double('ingNoTri', 14, 4)->comment('Plan financiero municipios 1.2. ingresos no tributarios');
            $table->double('ingTra', 14, 4)->comment('Plan financiero municipios 1.3. transferencias');
            $table->double('ingNivNac', 14, 4)->comment('Plan financiero municipios 1.3.1. del nivel nacional');
            $table->double('ingNoTriOtr', 14, 4)->comment('Plan financiero municipios 1.3.2. otras');
            $table->double('gasTot', 14, 4)->comment('Plan financiero municipios gastos totales');
            $table->double('gasCor', 14, 4)->comment('Plan financiero municipios 2. gastos corrientes');
            $table->double('fun', 14, 4)->comment('Plan financiero municipios 2.1. funcionamiento');
            $table->double('serFun', 14, 4)->comment('Plan financiero municipios 2.1.1. servicios personales');
            $table->double('gasGen', 14, 4)->comment('Plan financiero municipios 2.1.2. gastos generales');
            $table->double('traPag', 14, 4)->comment('Plan financiero municipios 2.1.3. transferencias pagadas');
            $table->double('intDeuPub', 14, 4)->comment('Plan financiero municipios 2.2. intereses deuda publica');
            $table->double('defAhoCor', 14, 4)->comment('Plan financiero municipios 3. déficit o ahorro corriente (1-2)');
            $table->double('ingCap', 14, 4)->comment('Plan financiero municipios 4. ingresos de capital');
            $table->double('reg', 14, 4)->comment('Plan financiero municipios 4.1. regalías');
            $table->double('traNac', 14, 4)->comment('Plan financiero municipios 4.2. transferencias nacionales (sgp, etc.)');
            $table->double('cof', 14, 4)->comment('Plan financiero municipios 4.3. cofinanciacion');
            $table->double('ingCapOtr', 14, 4)->comment('Plan financiero municipios 4.4. otros');
            $table->double('gasCap', 14, 4)->comment('Plan financiero municipios 5. gastos de capital (inversión)');
            $table->double('forBruCapFij', 14, 4)->comment('Plan financiero municipios 5.1.1.1. formación brutal de capital fijo');
            $table->double('gasCapOtr', 14, 4)->comment('Plan financiero municipios 5.1.1.2. otros');
            $table->double('defSupTot', 14, 4)->comment('Plan financiero municipios 6. déficit o superávit total (3+4-5)');
            $table->double('fin', 14, 4)->comment('Plan financiero municipios 7. financiamiento');
            $table->double('creNet', 14, 4)->comment('Plan financiero municipios 7.1. crédito neto');
            $table->double('des', 14, 4)->comment('Plan financiero municipios 7.1.1. desembolsos (+)');
            $table->double('amo', 14, 4)->comment('Plan financiero municipios 7.1.2. amortizaciones (-)');
            $table->double('recBalVarDepOtr', 14, 4)->comment('Plan financiero municipios 7.3. recursos del balance, variación de depósitos y otros');
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
        Schema::dropIfExists('PlanFinanciero');
    }
}

