<?php

use Illuminate\Database\Seeder;

class TestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tests')->insert([
            'id' => 1,
            'name' => "Aptitudes",
        ]);
        DB::table('tests')->insert([
            'id' => 2,
            'name' => "Interéses",
        ]);
    }
}
