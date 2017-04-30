<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario', 45);
            $table->string('contrasenia', 45);
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->string('cedula', 20);
            $table->string('telefono', 20);
            $table->string('email')->unique();
            $table->enum('tipo', ['admin', 'otro']);
            $table->rememberToken();
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
        Schema::dropIfExists('Usuarios');
    }
}
