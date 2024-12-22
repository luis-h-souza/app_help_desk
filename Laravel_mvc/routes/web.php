<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\SeLogado;
use App\Http\Middleware\SeNaoLogado;
use Illuminate\Support\Facades\Route;

// rotas do Auth - usuário não logado
Route::middleware([SeNaoLogado::class])->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
});

// rotas do app - Usuário logado
Route::middleware([SeLogado::class])->group(function(){
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('newCalled', [MainController::class, 'new'])->name('new');
    Route::post('newCalledSubmit', [MainController::class, 'newSubmit'])->name('newSubmit');
    Route::get('consultCalled', [MainController::class, 'consult'])->name('consult');
    Route::get('users', [MainController::class, 'users'])->name('users');

    // rota para edição de chamados
    Route::get('editCalled/{id}', [MainController::class, 'editCalled'])->name('edit');

    // rota para deletar chamados
    Route::get('deleteCalled/{id}', [MainController::class, 'deleteCalled'])->name('delete');

    // logout da aplicação
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
