<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// rotas do Auth - usuário não logado
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('loginSubmit', [AuthController::class, 'loginSubmit']);


// rotas do app
Route::get('/', [MainController::class, 'index'])->name('home');


// logout da aplicação
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
