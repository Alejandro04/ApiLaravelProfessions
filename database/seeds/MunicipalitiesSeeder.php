<?php

use Illuminate\Database\Seeder;

class MunicipalitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('municipalities')->insert(array(
            'name' => 'Michelena',
        ));
        \DB::table('municipalities')->insert(array(
            'name' => 'Sc',
        ));
        \DB::table('municipalities')->insert(array(
            'name' => 'Colón',
        ));
    }
}
