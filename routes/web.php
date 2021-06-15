<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\FornecedorController;
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

Route::get('/estados', [EstadoController::class, 'index'])->name('estados.index');
Route::get('/estados/create', [EstadoController::class, 'create'])->name('estados.create');
Route::post('/estados', [EstadoController::class, 'store'])->name('estados.store');
Route::get('/estados/{id}/edit', [EstadoController::class, 'edit'])->name('estados.edit');
Route::put('/estados/{id}', [EstadoController::class, 'update'])->name('estados.update');

Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas.index');
Route::get('/empresas/create', [EmpresaController::class, 'create'])->name('empresas.create');
Route::post('/empresas', [EmpresaController::class, 'store'])->name('empresas.store');
Route::get('/empresas/{id}/edit', [EmpresaController::class, 'edit'])->name('empresas.edit');
Route::put('/empresas/{id}', [EmpresaController::class, 'update'])->name('empresas.update');
Route::delete('/empresas/{id}',[EmpresaController::class,'destroy'])->name('empresas.destroy');

Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('fornecedores.index');
Route::get('/forenecedores/create', [FornecedorController::class, 'create'])->name('fornecedores.create');
Route::post('/fornecedores', [FornecedorController::class, 'store'])->name('fornecedores.store');
Route::get('/fornecedores/{id}/edit', [FornecedorController::class, 'edit'])->name('fornecedores.edit');
Route::put('/fornecedores/{id}', [FornecedorController::class, 'update'])->name('fornecedores.update');
Route::delete('/forenecedores/{id}',[FornecedorController::class,'destroy'])->name('fornecedores.destroy');



Route::get('/', function () {
    return view('home');
});
