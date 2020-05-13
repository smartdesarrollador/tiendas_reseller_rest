<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
 
        for($i = 1; $i<=30; $i++){
 
            \DB::table('usuarios')->insert([
                'nombre' => $faker->firstNameMale(),
                'password' => $faker->password(),
                'telefono' => $faker->numberBetween(1,1000000),
                'correo' => $faker->email(),
                'direccion' => $faker->address(),                            
                'imagen' => $faker->imageUrl($width = 640, $height = 480),
                'roles_id' => $faker->numberBetween(1,3),
                
                
            ]);
        }
    }
}
