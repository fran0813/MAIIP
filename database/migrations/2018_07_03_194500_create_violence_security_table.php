<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViolenceSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguridadViolencia', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('anioSV')->unique();
            $table->double('tasDesEscTot', 5, 2);
            $table->double('tasHom', 5, 2);
            $table->double('tasIncDen', 5, 2);
            $table->double('tasLesPer', 5, 2);
            $table->double('tasMueAcc', 5, 2);
            $table->double('tasSui', 5, 2);
            $table->double('vioInt', 5, 2);
            $table->double('casTot', 5, 2);
            $table->double('casTasHom', 5, 2);
            $table->integer('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('Municipios');
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
        Schema::dropIfExists('seguridadViolencia');
    }
}
