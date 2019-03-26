<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Content extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('content', function (Blueprint $table) {
            $table->increments('idContent');
            $table->string('title');
            $table->string('description');
            $table->string('pathImgVideo');
            /*$table->rememberToken();
            $table->timestamps(); */
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
         Schema::dropIfExists('content');
    }
}
