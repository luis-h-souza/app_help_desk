<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// rotas do Auth - usuário não logado
Route::get('login', [AuthController::class, 'login']);
Route::post('loginSubmit', [AuthController::class, 'loginSubmit']);

