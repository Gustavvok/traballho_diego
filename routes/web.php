<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FinanceiroController;

// Rota da Home 
Route::get('/', [HomeController::class, 'index']);

// Rotas criadas do "Financeiro"

Route::get('/financeiro', [FinanceiroController::class, 'index']);
Route::post('/financeiro', [FinanceiroController::class, 'store']);

// Rotas Usuários
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::post('/usuarios', [UsuarioController::class, 'store']);

