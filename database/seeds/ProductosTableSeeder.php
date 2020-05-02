<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
 
        for($i = 1; $i<=30; $i++){
 
            \DB::table('productos')->insert([
                'nombre' => 'Producto'.$i,
                'descripcion' => $faker->paragraph(),
                'precio' => $faker->numberBetween(1,1000),
                'imagen' => $faker->imageUrl($width = 640, $height = 480),
                'categorias_id' => $faker->numberBetween(1,30),
                
            ]);
        }
        

    }
}
