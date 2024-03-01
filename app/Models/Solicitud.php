<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Solicitud extends Eloquent
{
    use HasFactory;
    protected $connection = "mongodb";
    protected $collection = "Solicitud";
    protected $primarykey = "_id";
    protected $fillable = [
        'tipo_solicitud',
        'detalle_solicitud',
        'fecha_solicitud',
        'estado',
    ];

}
