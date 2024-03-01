<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicios;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servicios::create([
            'tipo_servicio' => 'Cuidado de 3 niñas',
            'precio_servicio' => '900',
            'duracion_servicio' => '8',
            'descripcion' => 'Cuidado de las niñas durante toda la noche',
            
        ]);
        Servicios::create([
            'tipo_servicio' => 'Cuidados de 1 niña',
            'precio_servicio' => '200',
            'duracion_servicio' => '3',
            'descripcion' => 'Cuidado de una niña en la mañana',
            
        ]);
    }
}
