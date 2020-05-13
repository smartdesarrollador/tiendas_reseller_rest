<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class EmpresariosTableSeeder extends Seeder
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
 
        for($i = 1; $i<=100; $i++){
 
            \DB::table('empresarios')->insert([
                'nombre' => $faker->firstNameMale(),
                'apellido' => $faker->lastName(),
                'telefono' => $faker->numberBetween(1,1000000),
                'ruc' => $faker->numberBetween(1,100000000000),
                'correo' => $faker->email(),
                'direccion' => $faker->address(),                            
                'imagen' => $faker->imageUrl($width = 640, $height = 480),
                'notificaciones_id' => $faker->numberBetween(1,30),
                'tiendas_id' => $faker->numberBetween(1,30),
                
                
            ]);
        }
    }
}
