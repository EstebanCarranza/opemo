<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VPuntuacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         if (Schema::hasTable('vPuntuacion')) 
            DB::statement('DROP VIEW IF EXISTS vPuntuacion;');
        \DB::statement("
            CREATE VIEW vPuntuacion 
            as
                SELECT idUsuario, round(avg(puntuacion)) as puntuacion FROM opemo.tbl_puntuacion
                group by idUsuario
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
        DB::statement('DROP VIEW IF EXISTS vPuntuacion;');
    }
}
