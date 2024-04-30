<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntentoController extends Controller
{
    public function index(){
        //mostrando la pagina de inicio 
        //return'<h1>AQUI SE MUESTRAN TODOS LOS DATOS DEL INTENTO</h1>';
        return view('persona.index');
    }
    //funcion que nos permite registrar algun dato 
    public function create(){
        //return '<h2>aqui para CREAR algun registro DE ESTA PAGINA DE INTENTO</h2>';
        return view('persona.create');
    }
    //mostrar un registro en especifico
    public function show($var){
        return '<h3>Este intento fue hecho por el usuario: ......</h3>'.$var;
    }
}
