<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    // Definir los atributos que se pueden asignar masivamente
    protected $fillable = ['descripcion', 'completada'];

    // Opcional: Definir los valores predeterminados para los atributos
    protected $attributes = [
        'completada' => false,
    ];
}