<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Servicios extends Eloquent
{

    use HasFactory;
    protected $connection = "mongodb";
    protected $collection = "Servicios";
    protected $primarykey = "_id";
    protected $fillable = [
        'tipo_servicio',
        'precio_servicio',
        'duracion_servicio',
        'descripcion',
    ];

}
