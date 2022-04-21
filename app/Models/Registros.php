<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    use HasFactory;

    protected $table = 'registro';

    protected $fillable = [
        'nombre','apellido','indice','fecha_nacimiento','cedula',
        'educacion','hobbies','paises'
    ];
}
