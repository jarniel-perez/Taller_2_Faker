<?php

use Illuminate\Database\Seeder;

class JugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Jugador::class, 20)->create();
    }
}
