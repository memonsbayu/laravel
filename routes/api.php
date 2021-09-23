<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

Route::get('/me', [AuthController::class, 'me']);
Route::resource('books', BookController::class);