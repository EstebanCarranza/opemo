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
        //
        DB::table('tbl_publicacionEstado')->insert(array('idPublicacionEstado' => 1, 'titulo' => 'Reportada'));
        DB::table('tbl_publicacionEstado')->insert(array('idPublicacionEstado' => 2, 'titulo' => 'Bloqueada'));
        DB::table('tbl_publicacionEstado')->insert(array('idPublicacionEstado' => 3, 'titulo' => 'Normal'));
        DB::table('tbl_publicacionEstado')->insert(array('idPublicacionEstado' => 4, 'titulo' => 'Eliminada'));
        DB::table('tbl_publicacionEstado')->insert(array('idPublicacionEstado' => 5, 'titulo' => 'Recuperada'));
        DB::table('tbl_publicacionEstado')->insert(array('idPublicacionEstado' => 6, 'titulo' => 'Guardada como borrador'));
        

        $this->command->info('Estados de publicacion agregados correctamente');
        //ejecutar el seed: php artisan db:seed --class=publicacionEstado
    }
}
