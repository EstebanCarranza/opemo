<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VListaPublicacionesReclamadas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('vListaPublicacionReclamada')) 
            DB::statement('DROP VIEW IF EXISTS vListaPublicacionReclamada;');
        \DB::statement("
            CREATE VIEW vListaPublicacionReclamada 
            AS
               select 
                    pubR.idPublicacionReclamada,
                    pub.idPublicacion, 
                    pubR.idUsuarioReclamador,
                    usR.name as nombreReclamador,
                    pubR.descripcion as mensaje,
                    pub.idUsuario, us.name,
                    pub.idUbicacion, ub.titulo as tituloUbicacion,
                    pub.idPublicacionEstado, pe.titulo as tituloPublicacionEstado,
                    ub.idCiudad, ci.titulo as tituloCiudad,
                    concat(ci.titulo, ', ', es.titulo, ', ', pa.titulo) as tituloCiudadCompleto,
                    pub.titulo as tituloPublicacion, pub.pathImgVideo, pub.fecha, pub.hora, pub.descripcion, pub.created_at, pub.updated_at, pub.pathVistaPrevia,
                    fnObtenerAntiguedad(pub.created_at) as antiguedad
                    From tbl_publicacionReclamada as pubR
                    inner join tbl_publicacion as pub on pub.idPublicacion = pubR.idPublicacion
                    inner join users as us on pub.idUsuario = us.id
                    inner join users as usR on pubR.idUsuarioReclamador = usR.id
                    inner join tbl_ubicacion as ub on pub.idUbicacion = ub.idUbicacion
                    inner join tbl_publicacionEstado as pe on pub.idPublicacionEstado = pe.idPublicacionEstado
                    inner join tbl_ciudad as ci on ub.idCiudad = ci.idCiudad
                    inner join tbl_estado as es on es.idEstado = ci.idEstado
                    inner join tbl_pais as pa on pa.idPais = es.idPais
                    ;
        ");
        //si sale error subir directamente a mysql desde workbench ahi si funciona sin problemas
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS vListaPublicacionReclamada;');
    }
}
