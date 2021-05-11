<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TestsSeeder::class);
        $this->call(ClasificacionesSeeder::class);
        $this->call(PreguntasSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(CrucesAreasSeeder::class);
        $this->call(CarrerasSeeder::class);
        $this->call(CarrerasXAreaSeeder::class);
        $this->call(ClasificacionesXTestsSeeder::class);
        $this->call(PreguntasXAreasSeeder::class);
        $this->call(PreguntasXCarreraXAreasSeeder::class);
        $this->call(CarrerasXSubfamiliasSeeder::class);
        $this->call(SubfamiliasSeeder::class);
    }
}
