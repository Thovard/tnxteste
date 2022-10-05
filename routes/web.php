<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendedorController;
use Illuminate\Support\Facades\Route;

//empresa
route::get('/home', [HomeController::class, 'index'])->name('home.index');                                           //<-- home home
route::get('/home/cadastroEmpresa', [HomeController::class, 'create_empresa'])->name('empresa.cadastroEmpresa');     //<-- cadastro de empresa
    route::post('/home', [HomeController::class, 'store'])->name('home.store');
route::get('/home/{id}/EditEmpresa',[EmpresaController::class, 'edit'])->name('empresa.edit');                       //<--- editar empresa
    route::put('/home/{id}', [EmpresaController::class, 'update'])->name('empresa.update');
Route::get('/home/{id}', [HomeController::class, 'show'])->name('home.show');                                        //<-- home empresa
Route::delete('users/{id}', [EmpresaController::class, 'delete'])->name('emrpesa.delete');                           //<-- delete empresa


//vendedor

route::get('/home/{name}/VendedorHome', [VendedorController::class, 'index'])->name('vendedor.index');

route::get('/home/{name}/VendedorCadastro', [VendedorController::class, 'create_vendedor'])->name('vendedor.cadastro');
    route::put('/home', [VendedorController::class, 'store_vendedor'])->name('home.store-vendedor');



Route::get('/', function () {
    return view('welcome');
});
