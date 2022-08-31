<?php

namespace App\Http\Controllers;

use App\Models\Registros;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function ObtenerDatos(){
        return Registros::all();
        //este comentario va a danar todo el proyecto
    }
}
