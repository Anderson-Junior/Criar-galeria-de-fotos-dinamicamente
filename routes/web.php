<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecretariaController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ImagemController;
use App\Http\Controllers\ClasseController;

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
Route::get('/lista-secretaria', [SecretariaController::class, 'listaSecretaria'])->name('lista-secretaria');
Route::get('/editar-secretaria/{id}', [SecretariaController::class, 'editarSecretaria'])->name('editar-secretaria');
Route::get('/salvar-edicao/{id}', [SecretariaController::class, 'salvarEdicao'])->name('salvar-edicao');
Route::get('/excluir-secretaria/{id}', [SecretariaController::class, 'excluirSecretaria'])->name('excluir-secretaria');

/*----------------GALERIA-------------------*/
Route::get('/{secretaria}/nova-galeria', [GaleriaController::class, 'novaGaleria'])->name('nova-galeria');
Route::post('/{secretaria}/salvar-galeria', [GaleriaController::class, 'salvarGaleria'])->name('salvar-galeria');
Route::get('/{secretaria}/lista-galeria', [GaleriaController::class, 'listaGaleria'])->name('lista-galeria');
Route::get('/editar-galeria/{id}', [GaleriaController::class, 'editarGaleria'])->name('editar-galeria');
Route::get('salvar-edicao-galeria/{id}', [GaleriaController::class, 'salvarEdicao'])->name('salvar-edicao-galeria');
Route::get('/excluir-galeria/{id}', [GaleriaController::class, 'excluirGaleria'])->name('excluir-galeria');

/*---------------CATEGORIA------------------*/
Route::get('/{galeria}/nova-categoria', [CategoriaController::class, 'novaCategoria'])->name('nova-categoria');
Route::post('/{galeria}/salvar-categoria', [CategoriaController::class, 'salvarCategoria'])->name('salvar-categoria');
Route::get('/{galeria}/lista-categoria', [CategoriaController::class, 'listaCategoria'])->name('lista-categoria');
Route::get('/editar-categoria/{id}', [CategoriaController::class, 'editarCategoria'])->name('editar-categoria');
Route::get('/salvar-edicao-categoria/{id}', [CategoriaController::class, 'salvarEdicao'])->name('salvar-edicao-categoria');
Route::get('/excluir-categoria/{id}', [CategoriaController::class, 'excluirCategoria'])->name('excluir-categoria');

/*---------------IMAGEM----------------------*/
Route::get('/{categoria}/nova-imagem', [ImagemController::class, 'novaImagem'])->name('nova-imagem');
Route::post('/{categoria}/salvar-imagem',[ImagemController::class, 'salvarImagem'])->name('salvar-imagem');
Route::get('/{categoria}/lista-imagem', [ImagemController::class, 'listaImagem'])->name('lista-imagem');
Route::get('/editar-imagem/{id}', [ImagemController::class, 'editarImagem'])->name('editar-imagem');
Route::get('/excluir-imagem/{id}', [ImagemController::class, 'excluirImagem'])->name('excluir-imagem');
Route::get('/salvar-edicao-imagem/{id}', [ImagemController::class, 'salvarEdicao'])->name('salvar-edicao-imagem');
Route::get('/{categoria}/lista-imagem-cliente', [ImagemController::class, 'listaImagemCliente'])->name('lista-imagem-cliente');
/*--------------CLASSES---------------------*/
Route::get('/{imagem}/nova-classe', [ClasseController::class, 'novaClasse'])->name('nova-classe');
Route::post('/{imagem}/salvar-classe', [ClasseController::class, 'salvarClasse'])->name('salvar-classe');
Route::get('/{imagem}/lista-classes', [ClasseController::class, 'listaClasses'])->name('lista-classes');
