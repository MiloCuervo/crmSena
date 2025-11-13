<?php

namespace Database\Seeders;

use App\Models\Casos;   
use App\Models\ModeloUsuarios;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        ModeloUsuarios::factory(4)->create([
            'nombre' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'contraseña' =>fake()->varchar(10),   
            'rol'=> fake()->boolean(),
            
        ]);

        Casos::factory()->create([
            'titulo' => 'Caso de prueba',
            'descripcion' => 'Descripción del caso de prueba',
            'estado' => 'abierto',
            'prioridad' => 'alta',
            'asignado_a' => fake()->numberBetween(1, 4),

        ]);
    }
}
