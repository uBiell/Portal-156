<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;

Route::get('/', [RoutesController::class, 'portal']);

Route::get('/cadastro', [RoutesController::class, 'register']);

Route::get('/ocorrencia', [RoutesController::class, 'request']);

Route::get('/ocorrencia/cpf', [RoutesController::class, 'requestCpf']);

Route::get('/ocorrencia/cnpj', [RoutesController::class, 'requestCnpj']);

Route::get('/ocorrencia/final', [RoutesController::class, 'requestFinal']);

Route::get('/ocorrencia/finalizado', [RoutesController::class, 'requestModal']);

Route::get('/estatistica', [RoutesController::Class, 'statistics']);

Route::get('/servicos', [RoutesController::Class, 'services']);

Route::get('/sobre', [RoutesController::Class, 'about']);