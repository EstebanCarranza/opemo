<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitBD03 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         $timestamps = true;
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

            $table->foreign('idUsuario','fk_usuarioRecuperado')->references('id')->on('users');
            $table->foreign('idUbicacion','fk_ubicacionRecuperado')->references('idUbicacion')->on('tbl_ubicacion');
            $table->foreign('idCiudad','fk_ciudadRecuperado')->references('idCiudad')->on('tbl_ciudad');

        });
        Schema::create('tbl_mensaje', function (Blueprint $table) {
            $table->increments('idMensaje');
            $table->text('mensaje');
            $table->timestamps();

            $table->integer('idUsuario')->unsigned();
            $table->integer('idPublicacion')->unsigned();

            $table->foreign('idUsuario','fk_usuarioMensaje')->references('id')->on('users');
            $table->foreign('idPublicacion','fk_publicacionMensaje')->references('idPublicacion')->on('tbl_publicacion');

        });
        Schema::create('tbl_razonReporte', function (Blueprint $table) {
            $table->increments('idRazonReporte');
            $table->string('titulo');
            $table->timestamps();
            
        });
        Schema::create('tbl_publicacionReportada', function (Blueprint $table) {
            $table->increments('idPublicacionReportada');
            $table->timestamps();

            $table->integer('idPublicacion')->unsigned();
            $table->integer('idRazonReporte')->unsigned();

            $table->foreign('idPublicacion','fk_publicacionPubReportada')->references('idPublicacion')->on('tbl_publicacion');
            $table->foreign('idRazonReporte','fk_razonReportePubReportada')->references('idRazonReporte')->on('tbl_razonReporte');

        });
        Schema::create('tbl_comentario', function (Blueprint $table) {
            $table->increments('idComentario');
            $table->timestamps();

            $table->integer('idUsuario')->unsigned();
            $table->integer('idPublicacion')->unsigned();

            $table->foreign('idUsuario','fk_usuarioComentario')->references('id')->on('users');
            $table->foreign('idPublicacion','fk_publicacionComentario')->references('idPublicacion')->on('tbl_publicacion');

        });
        Schema::create('tbl_testimonio', function (Blueprint $table) {
            $table->increments('idTestimonio');
            $table->string('titulo');
            $table->string('descripcion');
            $table->boolean('mostrarTestimonio');
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
        Schema::dropIfExists('tbl_testimonio');
        Schema::dropIfExists('tbl_comentario');
        Schema::dropIfExists('tbl_publicacionReportada');
        Schema::dropIfExists('tbl_razonReporte');
        Schema::dropIfExists('tbl_recuperado');
        Schema::dropIfExists('tbl_mensaje');
    }
}
