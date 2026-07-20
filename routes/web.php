<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResourceController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/resources', [ResourceController::class, 'index']);
Route::get('/resource/{resource}', [ResourceController::class, 'show']);
