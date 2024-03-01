<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::create([
            'id_user'=> '65b13d8b937d95de35ebb8ef',
            'Rol' => 'Niñera',
            'funcionalidad' => 'Encargada de realizar los servicios que solicitan',
        ]);

        Rol::create([
            'id_user'=> '65dfef3773ebc7ce720738e6',
            'Rol' => 'Cliente',
            'funcionalidad' => 'Esta encargado de solicitar algun servicio a la agencia',
        ]);

        Rol::create([
            'id_user'=> '65dfef3773ebc7ce720738e7',
            'Rol' => 'Administrador',
            'funcionalidad' => 'Verifica las solicitudes',
    ]);
}
}