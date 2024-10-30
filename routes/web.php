<?php

use App\Http\Controllers\UserController;

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', [ProdutoController::class, 'create']);
Route::post('/produtos/novo', [ProdutoController::class, 'store'])->name('registrar_produto');
Route::get('/produtos/ver{id}', [ProdutoController::class, 'show'])->name('produtos_show');
Route::get('/produtos/editar{id}', [ProdutoController::class, 'edit']);
Route::post('/produtos/editar{id}', [ProdutoController::class, 'update'])->name('alterar_produto');
Route::get('/produtos/excluir{id}', [ProdutoController::class, 'delete'])->name('produtos_delete');
Route::delete('/produtos/excluir{id}', [ProdutoController::class, 'destroy'])->name('excluir_produto');



Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


Route::get('/pedidos/novo', [PedidoController::class, 'create']);
Route::post('/pedidos/novo', [PedidoController::class, 'store'])->name('registrar_pedido');
Route::get('/pedidos/ver{id}', [PedidoController::class, 'show'])->name('pedidos_show');
Route::get('/pedidos/editar{id}', [PedidoController::class, 'edit']);
Route::post('/pedidos/editar{id}', [PedidoController::class, 'update'])->name('alterar_pedido');
Route::get('/pedidos/excluir{id}', [PedidoController::class, 'delete'])->name('pedidos_delete');
Route::delete('/pedidos/excluir{id}', [PedidoController::class, 'destroy'])->name('excluir_pedido');
