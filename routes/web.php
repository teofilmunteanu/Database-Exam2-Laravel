<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
//use App\Http\Controllers\UserController;


Route::get('/', [IndexController::class, 'index']);
Route::any('/login', [IndexController::class, 'login']);
//Route::any('/signup', [IndexController::class, 'signup']);
//Route::any('/main', [IndexController::class, 'main'])->middleware('userAuth');
