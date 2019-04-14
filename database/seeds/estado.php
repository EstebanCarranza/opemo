<?php

use Illuminate\Database\Seeder;

class estado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_estado')->insert(array('titulo' => 'Aguascalientes, Aguascalientes','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Baja California, Mexicali','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Baja California Sur, La Paz','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Campeche, San Francisco de Campeche','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Chihuahua, Chihuahua','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Chiapas, Tuxtla Gutiérrez','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Coahuila, Saltillo','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Colima, Colima','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Durango, Victoria de Durango','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Guanajuato, Guanajuato','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Guerrero, Chilpancingo de los Bravo','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Hidalgo, Pachuca de Soto','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Jalisco, Guadalajara','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'México, Toluca de Lerdo','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Michoacán, Morelia','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Morelos, Cuernavaca','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Nayarit, Tepic','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Nuevo León, Monterrey','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Oaxaca, Oaxaca de Juárez','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Puebla, Puebla de Zaragoza','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Querétaro, Santiago de Querétaro','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Quintana Roo, Chetumal','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'San Luis Potosí, San Luis Potosí','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Sinaloa, Culiacán Rosales','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Sonora, Hermosillo','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Tabasco, Villahermosa','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Tamaulipas, Ciudad Victoria','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Tlaxcala, Tlaxcala de Xicohténcatl','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Veracruz, Xalapa-Enríquez','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Yucatán, Mérida','idPais'=>1));
        DB::table('tbl_estado')->insert(array('titulo' => 'Zacatecas, Zacatecas','idPais'=>1));
        $this->command->info('Estados agregados correctamente');
        //ejecutar el seed: php artisan db:seed --class=estado
    }
}
