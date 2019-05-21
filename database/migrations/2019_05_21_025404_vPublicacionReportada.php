<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VPublicacionReportada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (Schema::hasTable('vPublicacionReportada')) 
            \DB::statement('DROP VIEW IF EXISTS vPublicacionReportada;');
        
        \DB::statement("
            CREATE VIEW vPublicacionReportada 
            as
            SELECT 
                prl.idPublicacionReportada,
                prl.created_at,
                prl.updated_at,
                prl.idPublicacion,
                pub.titulo as tituloPublicacion,
                prl.idRazonReporte,
                rar.titulo as tituloRazonReporte,
                usr.id,
                usr.name as nombreUsuario
            FROM 
            tbl_publicacionreportada as prl
            inner join tbl_publicacion as pub on pub.idPublicacion = prl.idPublicacion
            inner join tbl_razonreporte as rar on rar.idRazonReporte = prl.idRazonReporte
            inner join users as usr on usr.id = pub.idUsuario
            ;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        \DB::statement('DROP VIEW IF EXISTS vSeguir;');
    }
}
