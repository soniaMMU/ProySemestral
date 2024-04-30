<?php
//indicando la direccion en la que se encuentra el controlador anteriormente creado
use App\Http\Controllers\InicioController;
use App\Http\Controllers\IntentoController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',InicioController::class);
/*
//SIN PARAMETROS
Route::get('personas', function(){
    return'<h2>Datos de las personas</h2>';
});
//CON UN PARÁMETRO
Route::get('personas/(persona)', function($persona){
    return 'el nombre de la persona es '. $persona;
});
//CON DOS PARAMETROS
Route::get('personas/{persona}/{apellido?})', function($persona, $apellido=null){
    return'<h1>Esta es una prueba para </h1>'.$persona.' que tiene el apellido '.$apellido;
});
//Route::get('/',PersonaController);*/
Route::controller(PersonaController::class)->group(function(){
    Route::get('personas', 'index');
    Route::get('personas/create', 'create');
    Route::get('persona/{persona}', 'show');
});

Route::controller(IntentoController::class)->group(function(){
    Route::get('intentos', 'index');
    Route::get('intentos/create', 'create');
    Route::get('intento/{var}', 'show');
});
