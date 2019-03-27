<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitBD extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tbl_pais', function (Blueprint $table) {
            $table->increments('idPais');
            $table->string('titulo',100);
        });
        Schema::create('tbl_estado', function (Blueprint $table) {
            $table->increments('idEstado');
            $table->string('titulo',100);
            $table->integer('idPais');
        });
        Schema::create('tbl_ciudad', function (Blueprint $table) {
            $table->increments('idCiudad');
            $table->string('titulo');
            $table->integer('idEstado');
        });
        Schema::create('tbl_usuario', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('alias');
            $table->string('nombre');
            $table->string('apellido_pat');
            $table->string('correo')->unique();
            $table->string('contrasenia');
            $table->string('pathAvatar');
            $table->string('pathPortada');
            $table->string('bio');
            $table->string('fechaNacimiento');
            $table->string('tokenRecuperacion');
            $table->string('fechaRegistro');
            $table->string('bloqueado');
        });
        Schema::create('tbl_ubicacion', function (Blueprint $table) {
            $table->increments('idUbicacion');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('idCiudad');
        });
        Schema::create('tbl_publicacionEstado', function (Blueprint $table) {
            $table->increments('idPublicacionEstado');
            $table->string('titulo');
        });
        Schema::create('tbl_publicacion', function (Blueprint $table) {
            $table->increments('idPublicacion');
            $table->string('titulo');
            $table->string('pathImgVideo');
            $table->string('fecha');
            $table->string('hora');
            $table->integer('idUbicacion');
            $table->string('descripcion');
            $table->integer('idPublicacionEstado');
        });
        Schema::create('tbl_puntuacion', function (Blueprint $table) {
            $table->increments('idPuntuacion');
            $table->integer('idUsuario');
            $table->integer('idPublicacion');
            $table->string('puntuacion');
        });
        Schema::create('tbl_recuperado', function (Blueprint $table) {
            $table->increments('idRecuperado');
            $table->integer('idUsuario');
            $table->string('titulo');
            $table->string('pathImgVideo');
            $table->string('fecha');
            $table->string('hora');
            $table->integer('idUbicacion');
            $table->integer('idMunicipio');
            $table->string('descripcion');
        });
        Schema::create('tbl_razonReporte', function (Blueprint $table) {
            $table->increments('idRazonReporte');
            $table->string('titulo');
        });
        Schema::create('tbl_publicacionReportada', function (Blueprint $table) {
            $table->increments('idPublicacionReportada');
            $table->integer('idPublicacion');
            $table->string('fecha');
            $table->integer('idRazonReporte');
        });
        Schema::create('tbl_comentario', function (Blueprint $table) {
            $table->increments('idComentario');
            $table->integer('idUsuario');
            $table->integer('idPublicacion');
            $table->string('fecha');
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
        Schema::dropIfExists('tbl_pais');
        Schema::dropIfExists('tbl_estado');
        Schema::dropIfExists('tbl_ciudad');
        Schema::dropIfExists('tbl_usuario');
        Schema::dropIfExists('tbl_ubicacion');
        Schema::dropIfExists('tbl_publicacionEstado');
        Schema::dropIfExists('tbl_publicacion');
        Schema::dropIfExists('tbl_puntuacion');
        Schema::dropIfExists('tbl_recuperado');
        Schema::dropIfExists('tbl_mensajes');
        Schema::dropIfExists('tbl_razonReporte');
        Schema::dropIfExists('tbl_publicacionReportada');
        Schema::dropIfExists('tbl_comentario');
        
    }
}
