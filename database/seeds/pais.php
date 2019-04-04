<?php

use Illuminate\Database\Seeder;

class pais extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_pais')->insert(array('idPais' => 1, 'titulo' => 'Estados Unidos Mexicanos'));
        $this->command->info('Paises agregados correctamente');
        //ejecutar el seed: php artisan db:seed --class=pais
    }
}
