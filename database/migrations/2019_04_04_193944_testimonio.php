<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Testimonio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
    }
}
