<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('usuario')->group(function(){
    Route::post('index', [\App\Http\Controllers\Api\UsuarioController::class, 'index'])->name('api.usuario.index');
    Route::post('create', [\App\Http\Controllers\Api\UsuarioController::class, 'create'])->name('api.usuario.create');
    Route::post('update/{usuario}', [\App\Http\Controllers\Api\UsuarioController::class, 'update'])->name('api.usuario.update');
    Route::delete('delete/{id}', [\App\Http\Controllers\Api\UsuarioController::class, 'delete'])->name('api.usuario.delete');
});
Route::prefix('produto')->group(function(){
    Route::post('index', [\App\Http\Controllers\Api\ProdutoController::class, 'index'])->name('api.produto.index');
    Route::post('create', [\App\Http\Controllers\Api\ProdutoController::class, 'create'])->name('api.produto.create');
    Route::post('update/{produto}', [\App\Http\Controllers\Api\ProdutoController::class, 'update'])->name('api.produto.update');
    Route::delete('delete/{id}', [\App\Http\Controllers\Api\ProdutoController::class, 'delete'])->name('api.produto.delete');
});
Route::prefix('cliente')->group(function(){
    Route::post('index', [\App\Http\Controllers\Api\ClienteController::class, 'index'])->name('api.cliente.index');
    Route::post('create', [\App\Http\Controllers\Api\ClienteController::class, 'create'])->name('api.cliente.create');
    Route::post('update/{Cliente}', [\App\Http\Controllers\Api\ClienteController::class, 'update'])->name('api.cliente.update');
    Route::delete('delete/{id}', [\App\Http\Controllers\Api\ClienteController::class, 'delete'])->name('api.cliente.delete');
});
Route::prefix('venda')->group(function(){
    Route::post('index', [\App\Http\Controllers\Api\VendaController::class, 'index'])->name('api.venda.index');
    Route::post('create', [\App\Http\Controllers\Api\VendaController::class, 'create'])->name('api.venda.create');
    Route::delete('delete/{id}', [\App\Http\Controllers\Api\VendaController::class, 'delete'])->name('api.venda.delete');
});