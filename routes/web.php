<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,  'index']);

Route::get('/about', [AboutController::class,  'tentang']);

Route::get('/service', [ServiceController::class,  'service']);

Route::get('/contact', [ContactController::class,  'contact']);


