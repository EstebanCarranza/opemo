<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTblUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //usuario principal
        Schema::table('tbl_usuario', function (Blueprint $table) {
            $table->string('alias',50)->change();
            $table->string('nombre',50)->nullable()->change();
            $table->string('apellido_pat',50)->nullable()->change();
            $table->text('pathAvatar')->nullable()->change();
            $table->text('pathPortada')->nullable()->change();
            $table->string('bio',255)->nullable()->change();
            $table->date('fechaNacimiento')->nullable()->change();
            $table->text('tokenRecuperacion')->nullable()->change();
            $table->boolean('bloqueado')->default(0)->change();
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
