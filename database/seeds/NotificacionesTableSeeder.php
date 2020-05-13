<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class NotificacionesTableSeeder extends Seeder
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
 
            \DB::table('notificaciones')->insert([
                'remitente' => $faker->email(),
                'destinatario' => $faker->email(),
                'asunto' => $faker->realText($maxNbChars = 50, $indexSize = 2),
                'mensaje' => $faker->paragraph(),
                
                
            ]);
        }
    }
}
