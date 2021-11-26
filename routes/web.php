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
use App\Http\Controllers\RolController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EstanteriaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RecepcionController;
use App\Http\Controllers\DocumentacionController;
use App\Http\Controllers\CarpetaController;

Route::get('/home', [HomeController::class,'index']);

//rol
Route::get('rol', [RolController::class, 'index']);
Route::get('rol/create', [RolController::class, 'create']);
Route::get('rol/{rol}', [RolController::class, 'show']);


//departamento
Route::get('departamento', [DepartamentoController::class, 'index']);
Route::get('departamento/create', [DepartamentoController::class, 'create']);
Route::get('departamento/{departamento}', [DepartamentoController::class, 'show']);


//estanteria
Route::get('estanteria', [EstanteriaController::class, 'index']);
Route::get('estanteria/create', [EstanteriaController::class, 'create']);
Route::get('estanteria/{estanteria}', [EstanteriaController::class, 'show']);


//usuario
Route::get('usuario', [UsuarioController::class, 'index']);
Route::get('usuario/create', [UsuarioController::class, 'create']);
Route::get('usuario/{usuario}', [UsuarioController::class, 'show']);


//recepcion
Route::get('recepcion', [RecepcionController::class, 'index']);
Route::get('recepcion/create', [RecepcionController::class, 'create']);
Route::get('recepcion/{recepcion}', [RecepcionController::class, 'show']);


//documentacion
Route::get('documentacion', [DocumentacionController::class, 'index']);
Route::get('documentacion/create', [DocumentacionController::class, 'create']);
Route::get('documentacion/{documentacion}', [DocumentacionController::class, 'show']);


//carpetas
Route::get('carpetas', [CarpetasController::class, 'index']);
Route::get('carpetas/create', [CarpetasController::class, 'create']);
Route::get('carpetas/{carpetas}', [CarpetasController::class, 'show']);
