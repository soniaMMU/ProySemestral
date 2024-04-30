<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //usar el controlador para hacer una vista, hay varias vistas
    public function __invoke(){
        return '<h1>esta es la pagina de inicio</h1>';
    }
}
