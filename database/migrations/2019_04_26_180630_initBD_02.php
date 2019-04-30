<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitBD02 extends Migration
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
         Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        Schema::create('tbl_ubicacion', function (Blueprint $table) {
            $table->increments('idUbicacion');
            $table->string('titulo');
            $table->text('descripcion');
            $table->text('pathUbicacion');
            
            $table->timestamps();
            
            $table->integer('idCiudad')->unsigned();
            $table->integer('idUsuario')->unsigned();

            $table->foreign('idCiudad','fk_ciudadUbicacion')->references('idCiudad')->on('tbl_ciudad');
            $table->foreign('idUsuario','fk_usuarioUbicacion')->references('id')->on('users');
        });
        Schema::create('tbl_publicacionEstado', function (Blueprint $table) {
            $table->increments('idPublicacionEstado');
            $table->string('titulo');
            $table->timestamps();
        });
        Schema::create('tbl_publicacion', function (Blueprint $table) {
            $table->increments('idPublicacion');
            $table->string('titulo');
            $table->text('pathImgVideo');
            $table->text('pathVistaPrevia');
            $table->date('fecha');
            $table->time('hora');
            $table->text('descripcion');
            $table->timestamps();
            
            $table->integer('idUbicacion')->unsigned();
            $table->integer('idPublicacionEstado')->unsigned();
            $table->integer('idUsuario')->unsigned();

            $table->foreign('idUbicacion','fk_ubicacionPublicacion')->references('idUbicacion')->on('tbl_ubicacion');
            $table->foreign('idPublicacionEstado','fk_pubEstadoPublicacion')->references('idPublicacionEstado')->on('tbl_publicacionEstado');
            $table->foreign('idUsuario','fk_usuarioPublicacion')->references('id')->on('users');

        });
        Schema::create('tbl_puntuacion', function (Blueprint $table) {
            $table->increments('idPuntuacion');
            $table->enum('puntuacion',['1','2','3','4','5']);
            $table->timestamps();
             
            $table->integer('idUsuario')->unsigned();
            $table->integer('idPublicacion')->unsigned();

            $table->foreign('idUsuario','fk_usuarioPuntuacion')->references('id')->on('users');
            $table->foreign('idPublicacion','fk_publicacionPuntuacion')->references('idPublicacion')->on('tbl_publicacion');
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
        
        Schema::dropIfExists('tbl_puntuacion');
        Schema::dropIfExists('tbl_publicacion');
        Schema::dropIfExists('tbl_publicacionEstado');
        Schema::dropIfExists('tbl_ubicacion');
        Schema::dropIfExists('password_resets');
    }
}
