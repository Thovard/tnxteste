<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

route::get('/home', [HomeController::class, 'index'])->name('home.index');                          //<-- home home

route::get('/home/cadastroEmpresa', [HomeController::class, 'create_empresa'])->name('empresa.cadastroEmpresa');     //<-- cadastro de empresa
route::post('/home', [HomeController::class, 'store'])->name('home.store');

route::get('/home/{id}/EditEmpresa',[EmpresaController::class, 'edit'])->name('empresa.edit');      //<--- editar empresa
    route::put('/home/{id}', [EmpresaController::class, 'update'])->name('empresa.update');

Route::get('/home/{id}', [HomeController::class, 'show'])->name('home.show');                           //<-- home empresa






Route::get('/', function () {
    return view('welcome');
});
