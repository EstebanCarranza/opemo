<?php

use Illuminate\Database\Seeder;

class ubicaciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tbl_ubicacion')->insert(array(
                    'titulo' => 'Morelos',
                    'descripcion' => 'Av. Morelos en el primer cuadro de la ciudad',
                    'idCiudad' => 40
        ));
        DB::table('tbl_ubicacion')->insert(array(
                    'titulo' => 'Morelos',
                    'descripcion' => 'Av. Morelos en el primer cuadro de la ciudad',
                    'idCiudad' => 40
        ));
        DB::table('tbl_ubicacion')->insert(array(
                    'titulo' => 'Santa Lucía',
                    'descripcion' => 'Muy cerca de fundidora y cintermex en el primer cuadro de la ciudad',
                    'idCiudad' => 40
        ));
        DB::table('tbl_ubicacion')->insert(array(
                    'titulo' => 'Parque hundido',
                    'descripcion' => 'Muy cerca de la macroplaza en el primer cuadro de la ciudad',
                    'idCiudad' => 40
        ));
        DB::table('tbl_ubicacion')->insert(array(
                    'titulo' => 'Fuente de la vida',
                    'descripcion' => 'Muy cerca de la macroplaza en el primer cuadro de la ciudad',
                    'idCiudad' => 40
        ));
        
        
        //Ejecutar como
        //php artisan db:seed --class=nombre_seed
        $this->command->info('Ubicaciones creadas satisfactoriamente');
    }
}
