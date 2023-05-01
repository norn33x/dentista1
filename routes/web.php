<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/pacientes', function(){
    return "Bienvenido a la pagina de Pacientes.";
});

Route::get('/eventos', function()
{
    //OBTENER LOS EVENTOS DE BASE DE DATOS.
    $eventos = \App\Models\Evento::all();

    //ASIGNAR LA CABECERA DEL DATATABLE.
    $heads = [
        'ID',
        'Nombre',
        'Descripcion',
        'Estado',
        'Tipo',
        'Fecha'
    ];

    //RETORNA LA VISTA CON LOS PARAMETROS NECESARIOS.
    return view('eventos', compact('eventos', 'heads'));
});

Route::get('/eventos/create', function(){
    return view('eventos_create');
});