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
        //Paises dados de alta
        Schema::create('tbl_pais', function (Blueprint $table) {
            $table->increments('idPais');
            $table->string('titulo',100);
            $table->timestamps();
        });
        
//        Schema::enableForeignKeyConstraints();
//estados dados de alta
        Schema::create('tbl_estado', function (Blueprint $table) {
            $table->increments('idEstado');
            $table->string('titulo',100);
            $table->timestamps();

            $table->integer('idPais')->unsigned();

            $table->foreign('idPais','fk_paisEstado')->references('idPais')->on('tbl_pais');
        });
        //guarda las ciudades con estado y pais
        Schema::create('tbl_ciudad', function (Blueprint $table) {
            $table->increments('idCiudad');
            $table->string('titulo',100);
            $table->boolean('areaMetropolitana')->default(false);
            $table->timestamps();
            
            $table->integer('idEstado')->unsigned();

            $table->foreign('idEstado','fk_estadoCiudad')->references('idEstado')->on('tbl_estado');
        });
        //usuario principal
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
            $table->boolean('bloqueado');
            $table->timestamps();
        });
        //ubicaciones que el usuario podrá dar de alta
        Schema::create('tbl_ubicacion', function (Blueprint $table) {
            $table->increments('idUbicacion');
            $table->string('titulo');
            $table->text('descripcion');
            $table->timestamps();
            
            $table->integer('idCiudad')->unsigned();

            $table->foreign('idCiudad','fk_ciudadUbicacion')->references('idCiudad')->on('tbl_ciudad');
        });
        //el estado de la publicacion (reportada, bloqueada, normal, borrada, recuperada)
        Schema::create('tbl_publicacionEstado', function (Blueprint $table) {
            $table->increments('idPublicacionEstado');
            $table->string('titulo');
            $table->timestamps();
        });
        //Publicaciones que el usuario da de alta
        Schema::create('tbl_publicacion', function (Blueprint $table) {
            $table->increments('idPublicacion');
            $table->string('titulo');
            $table->text('pathImgVideo');
            $table->date('fecha');
            $table->time('hora');
            $table->text('descripcion');
            $table->timestamps();
            
            $table->integer('idUbicacion')->unsigned();
            $table->integer('idPublicacionEstado')->unsigned();
            $table->integer('idCiudad')->unsigned();

            $table->foreign('idUbicacion','fk_ubicacionPublicacion')->references('idUbicacion')->on('tbl_ubicacion');
            $table->foreign('idPublicacionEstado','fk_pubEstadoPublicacion')->references('idPublicacionEstado')->on('tbl_publicacionEstado');
            $table->foreign('idCiudad','fk_ciudadPublicacion')->references('idCiudad')->on('tbl_ciudad');

        });
        //Puntuacion que se le asigna a la publicación
        Schema::create('tbl_puntuacion', function (Blueprint $table) {
            $table->increments('idPuntuacion');
            $table->enum('puntuacion',['1','2','3','4','5']);
            $table->timestamps();
             
            $table->integer('idUsuario')->unsigned();
            $table->integer('idPublicacion')->unsigned();

            $table->foreign('idUsuario','fk_usuarioPuntuacion')->references('idUsuario')->on('tbl_usuario');
            $table->foreign('idPublicacion','fk_publicacionPuntuacion')->references('idPublicacion')->on('tbl_publicacion');
        });
        //Aqui se guardan las publicaciones que se marcaron como recuperadas (se copian ya que el usuario puede borrarlas si quiere)
        Schema::create('tbl_recuperado', function (Blueprint $table) {
            $table->increments('idRecuperado');
            
            $table->string('titulo');
            $table->text('pathImgVideo');
            $table->date('fecha');
            $table->time('hora');
            $table->text('descripcion');
            $table->timestamps();
            
            $table->integer('idUsuario')->unsigned();
            $table->integer('idUbicacion')->unsigned();
            $table->integer('idCiudad')->unsigned();

            $table->foreign('idUsuario','fk_usuarioRecuperado')->references('idUsuario')->on('tbl_usuario');
            $table->foreign('idUbicacion','fk_ubicacionRecuperado')->references('idUbicacion')->on('tbl_ubicacion');
            $table->foreign('idCiudad','fk_ciudadRecuperado')->references('idCiudad')->on('tbl_ciudad');

        });
        //mensajes que le llegan al usuario
        Schema::create('tbl_mensaje', function (Blueprint $table) {
            $table->increments('idMensaje');
            $table->text('mensaje');
            $table->timestamps();

            $table->integer('idUsuario')->unsigned();
            $table->integer('idPublicacion')->unsigned();

            $table->foreign('idUsuario','fk_usuarioMensaje')->references('idUsuario')->on('tbl_usuario');
            $table->foreign('idPublicacion','fk_publicacionMensaje')->references('idPublicacion')->on('tbl_publicacion');

        });
        //razones por las que se reporto la publicacion o ubicación
        Schema::create('tbl_razonReporte', function (Blueprint $table) {
            $table->increments('idRazonReporte');
            $table->string('titulo');
            $table->timestamps();
            
        });
        //Aqui se guardan las publicaciones reportadas
        Schema::create('tbl_publicacionReportada', function (Blueprint $table) {
            $table->increments('idPublicacionReportada');
            $table->timestamps();

            $table->integer('idPublicacion')->unsigned();
            $table->integer('idRazonReporte')->unsigned();

            $table->foreign('idPublicacion','fk_publicacionPubReportada')->references('idPublicacion')->on('tbl_publicacion');
            $table->foreign('idRazonReporte','fk_razonReportePubReportada')->references('idRazonReporte')->on('tbl_razonReporte');

        });
        //Aqui se guardan los comentarios de la publicacion
        Schema::create('tbl_comentario', function (Blueprint $table) {
            $table->increments('idComentario');
            $table->timestamps();

            $table->integer('idUsuario')->unsigned();
            $table->integer('idPublicacion')->unsigned();

            $table->foreign('idUsuario','fk_usuarioComentario')->references('idUsuario')->on('tbl_usuario');
            $table->foreign('idPublicacion','fk_publicacionComentario')->references('idPublicacion')->on('tbl_publicacion');

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
