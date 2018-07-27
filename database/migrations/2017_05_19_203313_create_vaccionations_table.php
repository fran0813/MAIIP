<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccionationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vacunaciones', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->double('tasVacBCG', 14, 4)->comment('Tasa de Vacunación BCG');
            $table->double('tasVacDPT', 14, 4)->comment('Tasa de Vacunación DPT');
            $table->double('tasVacHepatitisB', 14, 4)->comment('Tasa de Vacunación Hepatitis B');
            $table->double('tasVacHIB', 14, 4)->comment('Tasa de Vacunación HIB');
            $table->double('tasVacPolio', 14, 4)->comment('Tasa de Vacunación Polio');
            $table->double('tasVacTripleViral', 14, 4)->comment('Tasa de Vacunación Triple viral');
            $table->integer('salud_id')->unsigned()->comment('Llave foránea a salud');
            $table->foreign('salud_id')->references('id')->on('Salud');
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
        Schema::dropIfExists('Vacunaciones');
    }
}
