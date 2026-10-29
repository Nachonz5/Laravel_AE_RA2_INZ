<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroInzController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [LibroInzController::class, 'index']);