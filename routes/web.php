<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::resource('/', BaseController::class)->only(['index']);
Route::get('/services/web-development', [ServiceController::class, 'webDevelopment'])->name('services.web-development');
Route::get('/services/system-administration', [ServiceController::class, 'systemAdminstration'])->name('services.system-administration');
Route::resource('/services', ServiceController::class)->only(['index']);
Route::resource('/contact', ContactController::class)->only(['index']);
