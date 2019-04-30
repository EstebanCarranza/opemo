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
        $timestamps = true;
        //Schema::enableForeignKeyConstraints();
        Schema::create('tbl_pais', function (Blueprint $table) {
            $table->increments('idPais');
            $table->string('titulo',100);
            $table->timestamps();
        });
        Schema::create('tbl_estado', function (Blueprint $table) {
            $table->increments('idEstado');
            $table->string('titulo',100);
            $table->timestamps();

            $table->integer('idPais')->unsigned();

            $table->foreign('idPais','fk_paisEstado')->references('idPais')->on('tbl_pais');
        });
        Schema::create('tbl_ciudad', function (Blueprint $table) {
            $table->increments('idCiudad');
            $table->string('titulo',100);
            $table->boolean('areaMetropolitana')->default(false);
            $table->timestamps();
            
            $table->integer('idEstado')->unsigned();

            $table->foreign('idEstado','fk_estadoCiudad')->references('idEstado')->on('tbl_estado');
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); 
            $table->string('alias',10)->nullable();
            $table->string('nombre',50)->nullable();
            $table->string('apellido_pat',50)->nullable();            
            $table->string('pathAvatar', 255)->default('defaultData/avatar.png');
            $table->string('pathPortada',255)->default('defaultData/cover.png');
            $table->string('bio',255)->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->boolean('bloqueado')->default(0);
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
      
        Schema::dropIfExists('users');
        Schema::dropIfExists('tbl_ciudad');
        Schema::dropIfExists('tbl_estado');
        Schema::dropIfExists('tbl_pais');
        
    }
}
