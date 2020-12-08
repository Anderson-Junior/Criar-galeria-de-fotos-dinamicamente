<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecretariaController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ImagemController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


/*-----------------SECRETARIA---------------*/
Route::get('/nova-secretaria', [SecretariaController::class, 'novaSecretaria'])->name('nova-secretaria');
Route::post('/salvar-secretaria', [SecretariaController::class, 'salvarSecretaria']);
Route::get('lista-secretaria', [SecretariaController::class, 'listaSecretaria'])->name('lista-secretaria');

/*----------------GALERIA-------------------*/
Route::get('/nova-galeria', [GaleriaController::class, 'novaGaleria'])->name('nova-galeria');
Route::post('/salvar-galeria', [GaleriaController::class, 'salvarGaleria'])->name('salvar-galeria');
Route::get('/lista-galeria', [GaleriaController::class, 'listaGaleria'])->name('lista-galeria');

/*---------------CATEGORIA------------------*/
Route::get('/{galeria}/nova-categoria', [CategoriaController::class, 'novaCategoria'])->name('nova-caregoria');
Route::post('/{galeria}/salvar-categoria', [CategoriaController::class, 'salvarCategoria'])->name('salvar-categoria');
Route::get('/lista-categoria', [CategoriaController::class, 'listaCategoria'])->name('lista-categoria');

/*---------------IMAGEM----------------------*/
Route::get('/{categoria}/nova-imagem', [ImagemController::class, 'novaImagem'])->name('nova-imagem');
Route::post('/{categoria}/salvar-imagem',[ImagemController::class, 'salvarImagem'])->name('salvar-imagem');
Route::get('/lista-imagem', [ImagemController::class, 'listaImagem'])->name('lista-imagem');
