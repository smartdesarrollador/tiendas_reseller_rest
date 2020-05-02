<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call([
            CategoriasTableSeeder::class,
            ProductosTableSeeder::class,
            MarcasTableSeeder::class,
            RubrosTableSeeder::class,
            UnidadesDeMedidasTableSeeder::class,
            ExistenciasTableSeeder::class,
            EstadosDePedidosTableSeeder::class,
            RepartidoresTableSeeder::class,
            MonedasTableSeeder::class,
            CuotasTableSeeder::class,
            TarjetasTableSeeder::class,
            DepartamentosTableSeeder::class,
            PromocionesTableSeeder::class,
            SucursalesTableSeeder::class,
            RolesTableSeeder::class,
        ]);
    }
}
