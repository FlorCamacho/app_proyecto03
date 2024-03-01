<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Solicitud;

class SolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Solicitud::create([
            'tipo_solicitud' => 'Cuidado de 3 niñas',
            'detalle_solicitud' => 'Necesito cuidado para mis tres hijos durante el fin de semana.',
            'fecha_solicitud' => 05/03/2024,
            'estado' => 'Pendiente',
        ]);
        Solicitud::create([
            'tipo_solicitud' => 'Cuidado de un bebe',
            'detalle_solicitud' => 'Necesito cuidado de mi bebe por 4 horas.',
            'fecha_solicitud' => 19/03/2024,
            'estado' => 'Aceptado',
        ]);
        
    }
}
