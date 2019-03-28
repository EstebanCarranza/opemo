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
            $table->integer('idPais')->default(-1);

            $table->foreign('idPais')->references('idPais')->on('tbl_pais');
        });
        Schema::create('tbl_ciudad', function (Blueprint $table) {
            $table->increments('idCiudad');
            $table->string('titulo',100);
            $table->integer('idEstado')->default(-1);

            $table->foreign('idEstado')->references('idEstado')->on('tbl_estado');
        });
        Schema::create('tbl_usuario', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('alias',10);
            $table->string('nombre',50);
            $table->string('apellido_pat',50);
            $table->string('correo',50)->unique();
            $table->text('contrasenia');
            $table->text('pathAvatar');
            $table->text('pathPortada');
            $table->string('bio',255);
            $table->date('fechaNacimiento');
            $table->text('tokenRecuperacion');
            $table->timestamp('fechaRegistro');
            $table->boolean('bloqueado');
            $table->timestamps('ultimoIngreso');
        });
        Schema::create('tbl_ubicacion', function (Blueprint $table) {
            $table->increments('idUbicacion');
            $table->string('titulo');
            $table->text('descripcion');
            $table->integer('idCiudad')->default(-1);

            $table->foreign('idCiudad')->references('idCiudad')->on('tbl_ciudad');
        });
        Schema::create('tbl_publicacionEstado', function (Blueprint $table) {
            $table->increments('idPublicacionEstado');
            $table->string('titulo');
        });
        Schema::create('tbl_publicacion', function (Blueprint $table) {
            $table->increments('idPublicacion');
            $table->string('titulo');
            $table->text('pathImgVideo');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('idUbicacion')->default(-1);
            $table->text('descripcion');
            $table->integer('idPublicacionEstado')->default(1);

            $table->foreign('idUbicacion')->references('idUbicacion')->on('tbl_ubicacion');
            $table->foreign('idMunicipio')->references('idMunicipio')->on('tbl_municipio');
            $table->foreign('idPublicacionEstado')->references('idPublicacionEstado')->on('tbl_publicacionEstado');

        });
        Schema::create('tbl_puntuacion', function (Blueprint $table) {
            $table->increments('idPuntuacion');
            $table->integer('idUsuario');
            $table->integer('idPublicacion');
            $table->enum('puntuacion',['1','2','3','4','5']);

            $table->foreign('idUsuario')->references('idUsuario')->on('tbl_usuario');
            $table->foreign('idPublicacion')->references('idPublicacion')->on('tbl_publicacion');
        });
        Schema::create('tbl_recuperado', function (Blueprint $table) {
            $table->increments('idRecuperado');
            $table->integer('idUsuario');
            $table->string('titulo');
            $table->text('pathImgVideo');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('idUbicacion');
            $table->integer('idMunicipio');
            $table->text('descripcion');
            $table->timestamps('fechaCreacion');

            $table->foreign('idUsuario')->references('idUsuario')->on('tbl_usuario');
            $table->foreign('idUbicacion')->references('idUbicacion')->on('tbl_ubicacion');
            $table->foreign('idMunicipio')->references('idMunicipio')->on('tbl_municipio');

        });
        
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('idMensajes');
            $table->integer('idUsuario');
            $table->integer('idPublicacion');
            $table->text('mensaje');
            $table->timestamps('fechaHora');

            $table->foreign('idUsuario')->references('idUsuario')->on('tbl_usuario');
            $table->foreign('idPublicacion')->references('idPublicacion')->on('tbl_publicacion');

        });
        
        Schema::create('tbl_razonReporte', function (Blueprint $table) {
            $table->increments('idRazonReporte');
            $table->string('titulo');
        });
        Schema::create('tbl_publicacionReportada', function (Blueprint $table) {
            $table->increments('idPublicacionReportada');
            $table->integer('idPublicacion');
            $table->timestamps('fechaHora');
            $table->integer('idRazonReporte');

            $table->foreign('idPublicacionReportada')->references('idPublicacionReportada')->on('tbl_publicacionReportada');
            $table->foreign('idPublicacion')->references('idPublicacion')->on('tbl_publicacion');
            $table->foreign('idRazonReporte')->references('idRazonReporte')->on('tbl_razonReporte');

        });
        Schema::create('tbl_comentario', function (Blueprint $table) {
            $table->increments('idComentario');
            $table->integer('idUsuario');
            $table->integer('idPublicacion');
            $table->timestamps('fechaHora');

            $table->foreign('idUsuario')->references('idUsuario')->on('tbl_usuario');
            $table->foreign('idPublicacion')->references('idPublicacion')->on('tbl_publicacion');

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
