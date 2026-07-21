<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResourceController;


Route::get('/', [HomeController::class, 'index']);
Route::resource('resources', ResourceController::class);
