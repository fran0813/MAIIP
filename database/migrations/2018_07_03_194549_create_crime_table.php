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
            $table->increments('id')->comment('Llave primaria');
            $table->double('tot', 14, 4)->comment('Total');
            $table->double('hom', 14, 4)->comment('Hombre');
            $table->double('muj', 14, 4)->comment('Mujer');
            $table->integer('seguridadviolencia_id')->unsigned()->comment('Llave foránea a seguridadviolencia');
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
