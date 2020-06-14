<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) {
            \DB::table('users')->insert(array(
                'first_name' => $faker->firstNameFemale,
                'last_name'  => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'address' => $faker->streetAddress,
                'gender' =>  $faker->randomElement(['Masculino','Femenino', 'No definido']),
                'birthdate' => date('Y-m-d H:m:s'),
                'email' => $faker->email,
                'password' => '12345678',
                'profession_id' => $faker->randomElement(['1','2','3']),
                'vehicle_id' => $faker->randomElement(['1','2','3']),
                'municipality_id' => $faker->randomElement(['1','2','3']),
            ));
        }
    }
}
