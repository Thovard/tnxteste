<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\VendedorController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [HomeController::class, 'vendas'])->name('vendas.home');
route::post('/cadastro', [HomeController::class, 'store'])->name('vendas.store');
route::get('/home', [HomeController::class, 'index'])->name('home.index');                                           //<-- home home




//empresa
Route::get('/empresas/{id}', [EmpresaController::class, 'show'])->name('empresa.show');
route::get('/empresas', [EmpresaController::class, 'create_empresa'])->name('empresa.cadastroEmpresa');
route::post('/empresas', [EmpresaController::class, 'store'])->name('empresa.store');
route::get('/home/{id}/EditEmpresa',[EmpresaController::class, 'edit'])->name('empresa.edit');
    route::put('/home/{id}', [EmpresaController::class, 'update'])->name('empresa.update');
Route::delete('/empresas/{id}', [EmpresaController::class, 'delete'])->name('empresa.delete');

//vendedor
route::get('/VendedorHome/{id}', [VendedorController::class, 'index'])->name('vendedor.index');
route::get('/empresas/{id}/vendedores', [VendedorController::class, 'create_vendedor'])->name('vendedor.cadastro');
route::post('/empresas/{id}/vendedores', [VendedorController::class, 'store_vendedor'])->name('vendedor.store-vendedor');
Route::delete('/vendedor/{id}', [VendedorController::class, 'delete_vendedor'])->name('vendedor.delete');
route::get('/vendedor/{id}/edit',[VendedorController::class, 'edit_vendedor'])->name('vendedor.edit');
    route::put('/vendedor/{id}', [VendedorController::class, 'update_vendedor'])->name('vendedor.update');

//produtos
route::get('/empresas/{id}/produtos', [ProdutosController::class, 'ceate_produto'])->name('produto.create');
route::post('/empresas/{id}/produtos', [ProdutosController::class, 'store_produto'])->name('produtos.store-produtos');
route::get('/ProdutoHome/{id}', [ProdutosController::class, 'index'])->name('produto.index');
route::get('/produto/{id}/edit',[ProdutosController::class, 'edit_produto'])->name('produto.edit');
    route::put('/produto/{id}', [ProdutosController::class, 'update_produto'])->name('produto.update');
Route::delete('/produto/{id}', [ProdutosController::class, 'delete_produto'])->name('produto.delete');


route::get('/teste', [HomeController::class, 'teste'])->name('home.teste');


