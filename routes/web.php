<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\meuController;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', [meuController::class, 'sobre']);
Route::get('/servicos', [meuController::class, 'servicos']);
Route::delete('/deletar-servico/{id}', [meuController::class, 'deletarServico']);

Route::get('/form-add-servico', [meuController::class, 'formAddServico']);

Route::post('/insert-servico', [meuController::class, 'insertServico']);

Route::get('/form-editar-servico/{id}', [meuController::class, 'formEditarServico']);
Route::put('/update-servico/{id}', [meuController::class, 'updateServico']);