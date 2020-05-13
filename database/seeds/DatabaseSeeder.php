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
            MarcasTableSeeder::class,
            RubrosTableSeeder::class,
            UnidadesDeMedidasTableSeeder::class,
            ExistenciasTableSeeder::class,
            EstadosDePedidosTableSeeder::class,
            RepartidoresTableSeeder::class,
            MonedasTableSeeder::class,
            FormaDePagosTableSeeder::class,
            DescuentosTableSeeder::class,
            CuotasTableSeeder::class,
            TarjetasTableSeeder::class,
            DepartamentosTableSeeder::class,
            PromocionesTableSeeder::class,
            RolesTableSeeder::class,
            NotificacionesTableSeeder::class,
            ProductosTableSeeder::class,
            ProvinciasTableSeeder::class,
            DistritosTableSeeder::class,
            ClientesTableSeeder::class,
            UsuariosTableSeeder::class,
            TiendasTableSeeder::class,
            SucursalesTableSeeder::class,
            EmpresariosTableSeeder::class,
            PedidosTableSeeder::class,
            DetallePedidosTableSeeder::class,


        
        ]);
    }
}
