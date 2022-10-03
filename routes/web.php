<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

route::get('/home', [HomeController::class, 'index'])->name('home.index');                          //<-- home home
route::get('/home/empresa/{id}', [EmpresaController::class, 'index_emoresa'])->name('empresa.index');       //<-- home empresa



route::get('/home/{id}/EditEmpresa',[EmpresaController::class, 'edit'])->name('');      //<--- editar empresa
route::put('/home/{id}', [EmpresaController::class, 'update'])->name('');


route::get('/home/cadastroEmpresa', [HomeController::class, 'create_empresa'])->name('empresa.cadastroEmpresa');     //<-- cadastro de empresa
route::post('/home', [HomeController::class, 'store'])->name('home.store');


Route::get('/home/{id}', [HomeController::class, 'show'])->name('home.show');


Route::get('/', function () {
    return view('welcome');
});
