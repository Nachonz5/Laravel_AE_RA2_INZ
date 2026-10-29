<?php

namespace Database\Seeders;

use App\Models\LibroInz;
use Illuminate\Database\Seeder;

class LibroInzSeeder extends Seeder
{
    public function run(): void
    {
        LibroInz::create([
            'titulo' => 'Don Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'anio_publicacion' => 2000,
        ]);

        LibroInz::create([
            'titulo' => 'Cien pies',
            'autor' => 'Jorge',
            'anio_publicacion' => 1956,
        ]);

        LibroInz::create([
            'titulo' => 'La vuelta',
            'autor' => 'Carlos',
            'anio_publicacion' => 2001,
        ]);
    }
}