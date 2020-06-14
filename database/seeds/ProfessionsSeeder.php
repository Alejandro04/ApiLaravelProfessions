<?php

use Illuminate\Database\Seeder;

class ProfessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('professions')->insert(array(
            'name' => 'Developer',
        ));
        \DB::table('professions')->insert(array(
            'name' => 'CEO',
        ));
        \DB::table('professions')->insert(array(
            'name' => 'CTO',
        ));
    }
}
