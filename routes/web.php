<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::resource('/', BaseController::class)->only(['index']);
Route::resource('/contact', ContactController::class)->only(['index']);
