<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendedorController;
use Illuminate\Support\Facades\Route;

//empresa
route::get('/home', [HomeController::class, 'index'])->name('home.index');                                           //<-- home home

Route::get('/empresas/{id}', [EmpresaController::class, 'show'])->name('empresa.show');
route::get('/empresas', [EmpresaController::class, 'create_empresa'])->name('empresa.cadastroEmpresa');
route::post('/empresas', [EmpresaController::class, 'store'])->name('empresa.store');
route::get('/home/{id}/EditEmpresa',[EmpresaController::class, 'edit'])->name('empresa.edit');
    route::put('/home/{id}', [EmpresaController::class, 'update'])->name('empresa.update');
Route::delete('/empresas/{id}', [EmpresaController::class, 'delete'])->name('empresa.delete');

//vendedor
route::get('/empresas/{id}/vendedores', [VendedorController::class, 'create_vendedor'])->name('vendedor.cadastro');
route::post('/empresas/{id}/vendedores', [VendedorController::class, 'store_vendedor'])->name('vendedor.store-vendedor');

route::get('/home/{name}/VendedorHome', [VendedorController::class, 'index'])->name('vendedor.index');



Route::get('/', function () {
    return view('welcome');
});
