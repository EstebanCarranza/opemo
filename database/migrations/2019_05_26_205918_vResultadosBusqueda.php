<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VResultadosBusqueda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (Schema::hasTable('vResultadosBusqueda')) 
            DB::statement('DROP VIEW IF EXISTS vResultadosBusqueda;');
        \DB::statement("
            create view vResultadosBusqueda
            as
            select 
                'publicacion' as tipoResultado,
                vPub.idPublicacion,
                vPub.idUsuario,
                vPub.name,
                vPub.tituloPublicacion,
                vPub.descripcion,
                vPub.antiguedad,
                vPub.pathVistaPrevia,
                vPub.idCiudad,
                vPub.tituloCiudad,
                vPub.tituloCiudadCompleto,
                vPub.created_at,
                vPub.updated_at,
                
                vPub.idUbicacion,
                vPub.tituloUbicacion,
                vPub.idPublicacionEstado,
                vPub.tituloPublicacionEstado,
                vPub.fecha,
                vPub.hora
            from vListaPublicacion as vPub
            union
            select 
                'ubicacion' as tipoResultado,
                vUb.idUbicacion,
                vUb.idUsuario,
                vUb.name,
                vUb.titulo as tituloUbicacion,
                vUb.descripcion as descripcionUbicacion,
                vUb.antiguedad,
                vUb.pathUbicacion,
                vUb.idCiudad,
                vUb.tituloCiudad,
                vUb.tituloCiudadCompleta,
                vUb.created_at,
                vUb.updated_at,

                vUb.idUbicacion as dr0,
                vUb.titulo as dr1,
                0 as dr2,
                'Normal' as dr3,
                date(updated_at) as dr4,
                time(updated_at) as dr5

            from vUbicacion as vUb;
        ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS vResultadosBusqueda;');
    }
}
