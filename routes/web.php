<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ServicoController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/auth',[LoginController::class,'auth'])->name('auth.user');
Route::post('/store',[LoginController::class,'store'])->name('store.user');
Route::get('/registrar', [LoginController::class, 'registrar'])->name('registrar');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente');
    Route::get('/cliente/novo', [ClienteController::class, 'create'])->name('cliente.novo');
    Route::post('/cliente/store', [ClienteController::class, 'store'])->name('cliente.store');
    Route::get('/cliente/{id}', [ClienteController::class, 'show'])->name('cliente.show');
    Route::get('/cliente/editar/{id}', [ClienteController::class, 'edit'])->name('cliente.editar');
    Route::put('/cliente/update/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    Route::get('/cliente/remover/{id}', [ClienteController::class, 'destroy'])->name('cliente.remover');

    Route::get('/colaborador', [ColaboradorController::class, 'index'])->name('colaborador');
    Route::get('/colaborador/novo', [ColaboradorController::class, 'create'])->name('colaborador.novo');
    Route::post('/colaborador/store', [ColaboradorController::class, 'store'])->name('colaborador.store');
    Route::get('/colaborador/{id}', [ColaboradorController::class, 'show'])->name('colaborador.show');
    Route::get('/colaborador/editar/{id}', [ColaboradorController::class, 'edit'])->name('colaborador.editar');
    Route::put('/colaborador/update/{id}', [ColaboradorController::class, 'update'])->name('colaborador.update');
    Route::get('/colaborador/remover/{id}', [ColaboradorController::class, 'destroy'])->name('colaborador.remover');

    Route::get('/material', [MaterialController::class, 'index'])->name('material');
    Route::get('/material/novo', [MaterialController::class, 'create'])->name('material.novo');
    Route::post('/material/store', [MaterialController::class, 'store'])->name('material.store');
    Route::get('/material/{id}', [MaterialController::class, 'show'])->name('material.show');
    Route::get('/material/editar/{id}', [MaterialController::class, 'edit'])->name('material.editar');
    Route::put('/material/update/{id}', [MaterialController::class, 'update'])->name('material.update');
    Route::get('/material/remover/{id}', [MaterialController::class, 'destroy'])->name('material.remover');

    Route::get('/servico', [ServicoController::class, 'index'])->name('servico');
    Route::get('/servico/novo', [ServicoController::class, 'create'])->name('servico.novo');
    Route::post('/servico/store', [ServicoController::class, 'store'])->name('servico.store');
    Route::get('/servico/{id}', [ServicoController::class, 'show'])->name('servico.show');
    Route::get('/servico/editar/{id}', [ServicoController::class, 'edit'])->name('servico.editar');
    Route::put('/servico/update/{id}', [ServicoController::class, 'update'])->name('servico.update');
    Route::get('/servico/remover/{id}', [ServicoController::class, 'destroy'])->name('servico.remover');

});
