<?php

use Illuminate\Database\Seeder;

class publicacionEstado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //(reportada, bloqueada, normal, borrada, recuperada)
        DB::table('tbl_publicacionEstado')->insert(array('titulo' => 'reportada'));
        DB::table('tbl_publicacionEstado')->insert(array('titulo' => 'bloqueada'));
        DB::table('tbl_publicacionEstado')->insert(array('titulo' => 'normal'));
        DB::table('tbl_publicacionEstado')->insert(array('titulo' => 'borrada'));
        DB::table('tbl_publicacionEstado')->insert(array('titulo' => 'recuperada'));

        $this->command->info('Estados de publicacion agregados correctamente');
        //ejecutar el seed: php artisan db:seed --class=publicacionEstado
    }
}
