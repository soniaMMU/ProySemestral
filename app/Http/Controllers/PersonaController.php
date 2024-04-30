<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index(){
        //mostrando la pagina de inicio de personas
        return view('persona.index'); //con esto va a utomaticamente a los resource y empieza a redireccionar
        //return'<h1>AQUI SE MUESTRAN TODOS LOS DATOS DE LAS PERSONAS</h1>';
    }
    //funcion que nos permite registrar algun dato del cliente en este caso
    public function create(){
        //return '<h2>aqui para CREAR algun registro de la persona</h2>';
        return view('persona.create');
    }
    //mostrar un registro en especifico
    public function show($persona){
        //return '<h3>El nombre de la persona es...</h3>'.$persona;
        return view('persona.show', compact('persona'));
    }
}
