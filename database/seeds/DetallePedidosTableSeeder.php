<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class DetallePedidosTableSeeder extends Seeder
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
 
        for($i = 1; $i<=300; $i++){
 
            \DB::table('detalle_pedidos')->insert([
                'cantidad' => $faker->numberBetween(1,10),
                'subtotal' => $faker->numberBetween(1,100),
                'productos_id' => $faker->numberBetween(1,30),
                'pedidos_id' => $faker->numberBetween(1,100),
                
            ]);
        }

    }
}
