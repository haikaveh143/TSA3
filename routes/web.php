<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);