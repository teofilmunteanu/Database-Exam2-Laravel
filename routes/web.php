<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;


Route::get('/', [IndexController::class, 'index']);
Route::get('/login', [IndexController::class, 'login']);
Route::get('/main', [IndexController::class, 'main'])->middleware('userAuth');
