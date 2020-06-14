<?php

use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('vehicles')->insert(array(
            'brand' => 'Ford',
            'year' => '2020',
        ));
        \DB::table('vehicles')->insert(array(
            'brand' => 'Chevrolet',
            'year' => '2020',
        ));
        \DB::table('vehicles')->insert(array(
            'brand' => 'Fiat',
            'year' => '2020',
        ));
    }
}
