<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'Producto 1',
            'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate accusantium.',
            'precio' => 100.90,
            'imagen' => 'imagen1.jpg',
            'categorias_id' => 1,
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Producto 2',
            'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate accusantium.',
            'precio' => 140.90,
            'imagen' => 'imagen2.jpg',
            'categorias_id' => 1,
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Producto 3',
            'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate accusantium.',
            'precio' => 150.90,
            'imagen' => 'imagen3.jpg',
            'categorias_id' => 1,
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Producto 4',
            'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate accusantium.',
            'precio' => 170.90,
            'imagen' => 'imagen4.jpg',
            'categorias_id' => 1,
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Producto 5',
            'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate accusantium.',
            'precio' => 70.90,
            'imagen' => 'imagen5.jpg',
            'categorias_id' => 1,
        ]);
    }
}
