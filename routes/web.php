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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\rolController;
use App\Http\Controllers\departamentoController;
use App\Http\Controllers\estanteriaController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\recepcionController;
use App\Http\Controllers\documentacionController;
use App\Http\Controllers\carpetaController;

Route::get('/', HomeController::class);

//rol
Route::get('rol', [rolController::class, 'index']);
Route::get('rol/create', [rolController::class, 'create']);
Route::get('rol/{rol}', [rolController::class, 'show']);


//departamento
Route::get('departamento', [departamentoController::class, 'index']);
Route::get('departamento/create', [departamentoController::class, 'create']);
Route::get('departamento/{departamento}', [departamentoController::class, 'show']);


//estanteria
Route::get('estanteria', [estanteriaController::class, 'index']);
Route::get('estanteria/create', [estanteriaController::class, 'create']);
Route::get('estanteria/{estanteria}', [estanteriaController::class, 'show']);


//usuario
Route::get('usuario', [usuarioController::class, 'index']);
Route::get('usuario/create', [usuarioController::class, 'create']);
Route::get('usuario/{usuario}', [eusuarioController::class, 'show']);


//recepcion
Route::get('recepcion', [recepcionController::class, 'index']);
Route::get('recepcion/create', [recepcionController::class, 'create']);
Route::get('recepcion/{recepcion}', [recepcionController::class, 'show']);


//documentacion
Route::get('documentacion', [documentacionController::class, 'index']);
Route::get('documentacion/create', [documentacionController::class, 'create']);
Route::get('documentacion/{documentacion}', [documentacionController::class, 'show']);


//carpetas
Route::get('carpetas', [carpetasController::class, 'index']);
Route::get('carpetas/create', [carpetasController::class, 'create']);
Route::get('carpetas/{carpetas}', [carpetasController::class, 'show']);
