<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            //$table->increments('idUsuario');
            //$table->string('alias',10);
            $table->string('nombre',50);
            $table->string('apellido_pat',50);
            //$table->string('correo',50)->unique();
            //$table->text('contrasenia');
            $table->text('pathAvatar');
            $table->text('pathPortada');
            $table->string('bio',255);
            $table->date('fechaNacimiento');
            //$table->text('tokenRecuperacion');
            $table->boolean('bloqueado');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
