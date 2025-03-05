<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::resource('/', BaseController::class)->only(['index']);
Route::get('/services/web-development', [ServiceController::class, 'service1'])->name('services.service-1');
Route::get('/services/system-administration', [ServiceController::class, 'service2'])->name('services.service-2');
Route::resource('/services', ServiceController::class)->only(['index']);
Route::get('/blog/i-have-revamped-my-website', [BlogController::class, 'article1'])->name('blog.article-1');
Route::resource('/blog', BlogController::class)->only(['index']);
Route::resource('/contact', ContactController::class)->only(['index']);
