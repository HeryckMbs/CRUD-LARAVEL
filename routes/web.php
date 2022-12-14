<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\condominioController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\apartamentoController;
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

Route::get('/',[Controller::class,'index'])->name('index');

Route::prefix('index')->group(function () {
    Route::post('/salvauser',[usuarioController::class, 'salvar'])->name('condominos.salvar');
    Route::post('/salvaCondo',[condominioController::class, 'salvar'])->name('condominios.salvar');
    Route::post('/salvaSindico',[usuarioController::class,'sindico'])->name('sindico.salvar');
    Route::post('/salvaApt',[apartamentoController::class,'salvar'])->name('apartamento.salvar');
});
