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
            $table->double('tasVacBCG', 5, 2);
            $table->double('tasVacDPT', 5, 2);
            $table->double('tasVacHepatitisB', 5, 2);
            $table->double('tasVacHIB', 5, 2);
            $table->double('tasVacPolio', 5, 2);
            $table->double('tasVacTripleViral', 5, 2);
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
