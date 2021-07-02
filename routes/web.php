<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portalController;

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

Route::get('/',         [portalController::class, 'index']);
Route::get('/registro', [portalController::class, 'register']);
Route::get('/preencher', [portalController::class, 'newsletter']);
Route::post('/registro', [portalController::class, 'adicionar'])->name('registro.adicionar');
Route::get('/noticia/ver/{id}', [portalController::class, 'show']);
Route::get('/noticia/editar/{id}', [portalController::class, 'edit']);
Route::post('/noticia/editar/{id}', [portalController::class, 'update'])->name('att_info');
Route::get('/noticia/todas', [portalController::class, 'listar']);
Route::post('/noticia/excluir/{id}', [portalController::class, 'destroy'])->name('excluir-noticia');