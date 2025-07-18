<?php

use App\Http\Controllers\usuarioController;
use App\Http\Controllers\perfilController;
use App\Http\Controllers\enderecoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/listar', [usuarioController::class, 'listagem']);
Route::post('/adicionar', [usuarioController::class, 'adicionar']);
Route::get('/editar/{user}', [usuarioController::class, 'editar']);
Route::put('/update/{user}', [usuarioController::class, 'update']);
Route::delete('/deletar/{user}', [usuarioController::class, 'delete']);
Route::get('/detalhar/{user}', [usuarioController::class, 'detalhar']);

Route::get('/listarendereco', [enderecoController::class, 'listagem']);
Route::post('/adicionarendereco', [enderecoController::class, 'adicionar']);
Route::get('/editarendereco/{endereco}', [enderecoController::class, 'editar']);
Route::put('/updateendereco/{endereco}', [enderecoController::class, 'update']);
Route::delete('/deletarendereco/{endereco}', [enderecoController::class, 'delete']);

Route::get('/listarperfils', [perfilController::class, 'listarperfils']);