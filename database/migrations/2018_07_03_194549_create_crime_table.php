<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DelitoSexual', function (Blueprint $table) {
            $table->increments('id');
            $table->double('tot', 5, 2);
            $table->double('hom', 5, 2);
            $table->double('muj', 5, 2);
            $table->integer('seguridadviolencia_id')->unsigned();
            $table->foreign('seguridadviolencia_id')->references('id')->on('SeguridadViolencia');
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
        Schema::dropIfExists('DelitoSexual');
    }
}
