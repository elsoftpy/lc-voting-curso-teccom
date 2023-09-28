<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estado::create([
            'nombre' => 'Abierta',
        ]);

        Estado::create([
            'nombre' => 'Considerando',
        ]);

        Estado::create([
            'nombre' => 'Cerrada',
        ]);

        Estado::create([
            'nombre' => 'En proceso',
        ]);

        Estado::create([
            'nombre' => 'Implementada',
        ]);
    }
}
