<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PaginasController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/itens', [PaginasController::class, 'mostrarItens']);
Route::get('/contato', [PaginasController::class, 'mostrarContato']);