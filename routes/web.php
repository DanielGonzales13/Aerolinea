<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('aerolineas', App\Http\Controllers\aerolineaController::class);

Route::resource('departamentos', App\Http\Controllers\departamentoController::class);
Route::resource('municipios', App\Http\Controllers\municipioController::class);
Route::resource('aeropuertos', App\Http\Controllers\aeropuertoController::class);
Route::resource('vuelos', App\Http\Controllers\vueloController::class);
Route::resource('paquetes', App\Http\Controllers\paqueteController::class);
Route::resource('clases', App\Http\Controllers\claseController::class);
Route::resource('pasajeros', App\Http\Controllers\pasajeroController::class);
Route::resource('colaboradors', App\Http\Controllers\colaboradorController::class);
Route::resource('beneficios', App\Http\Controllers\beneficioController::class);
Route::resource('reservacions', App\Http\Controllers\reservacionController::class);
Route::resource('vuelo_colaboradors', App\Http\Controllers\vuelo_colaboradorController::class);
Route::get('aeropuertos/municipios/{iddepto}', [App\Http\Controllers\aeropuertoController::class, 'getMunicipios']);
