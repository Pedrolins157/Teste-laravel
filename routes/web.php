<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.auth');

Route::middleware(['auth'])->group(function () {
   
    Route::get('/', function () {
        return view('dashboard',['user'=>Auth::user()]);
    });

    Route::prefix('produto')->group(function () {
        Route::get('cadastra', function () {
            return view('layout/partes/produto/cadastro-produto');
        })->name('cadastra.produto');
        Route::get('consulta', function () {
            return view('layout/partes/produto/consulta-produto');
        })->name('consulta.produto');
    });

    Route::prefix('cliente')->group(function () {
        Route::get('cadastra', function () {
            return view('layout/partes/cliente/cadastro-cliente');
        })->name('cadastra.cliente');
        Route::get('consulta', function () {
            return view('layout/partes/cliente/consulta-cliente');
        })->name('consulta.cliente');
    });

    Route::get('cliente', function () {
        return view('layout/partes/clientes');
    })->name('cliente');

    Route::prefix('venda')->group(function () {
        Route::get('cadastra', function () {
            return view('layout/partes/venda/cadastro-venda');
        })->name('cadastra.venda');
        Route::get('historico', function () {
            return view('layout/partes/venda/historico-venda');
        })->name('historico.venda');
    });

    Route::get('vendas', function () {
        return view('layout/partes/venda/vendas');
    })->name('venda');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
});