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
        Schema::create('SeguridadViolencia', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('anioSV')->unique();
            $table->double('tasDesEscTot', 14, 4);
            $table->double('tasHom', 14, 4);
            $table->double('tasIncDen', 14, 4);
            $table->double('tasLesPer', 14, 4);
            $table->double('tasMueAcc', 14, 4);
            $table->double('tasSui', 14, 4);
            $table->double('vioInt', 14, 4);
            $table->double('casTot', 14, 4);
            $table->double('casTasHom', 14, 4);
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
        Schema::dropIfExists('SeguridadViolencia');
    }
}
