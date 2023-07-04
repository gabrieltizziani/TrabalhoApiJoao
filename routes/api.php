<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/tasks', [TaskController::class, 'index']); // rota principal infos principais da api
Route::post('/tasks', [TaskController::class, 'store']); // envia para o banco de dados 
Route::get('/tasks/{tasks}', [TaskController::class, 'show']); // trazer as infos do banco de dados 
Route::put('/tasks/{tasks}', [TaskController::class, 'update']); // atualiza as infos do bd
Route::delete ('/tasks/{tasks}', [TaskController::class, 'destroy']); // exclui as infos do bd


