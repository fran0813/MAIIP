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
            $table->increments('id');
            $table->double('tasVacBCG', 14, 4);
            $table->double('tasVacDPT', 14, 4);
            $table->double('tasVacHepatitisB', 14, 4);
            $table->double('tasVacHIB', 14, 4);
            $table->double('tasVacPolio', 14, 4);
            $table->double('tasVacTripleViral', 14, 4);
            $table->integer('salud_id')->unsigned();
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
