<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     //inserción de datos desde el seed en la tabla equipos
    public function run()
    {
      /*  DB::table('equipos')->insert([
          'nombre' => 'psg',
          'pais' => 'francia',
          'color' => 'blanco',
          'email' => 'psg@gmail.com',
          'telefono' => '776544',
        ]);*/

        factory(App\Equipo::class, 5)->create();
    }
}
