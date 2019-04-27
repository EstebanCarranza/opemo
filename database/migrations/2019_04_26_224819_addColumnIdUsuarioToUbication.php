<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnIdUsuarioToUbication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('tbl_ubicacion', function (Blueprint $table) {
            $table->integer('idUsuario')->unsigned()->default(1);
            $table->foreign('idUsuario','fk_ubicacionUsuarioK')->references('idUsuario')->on('tbl_usuario');
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
