<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('clientes')->insert([
                'email' => $faker->unique()->safeEmail,
                'name' => $faker->name,
                'phone' => $faker->numerify('09########'),
                'image' => Str::random(10) . '.png', // Genera un nombre aleatorio para la imagen
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
