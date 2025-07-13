<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::resource('/', BaseController::class)->only(['index']);
Route::get('/services/web-development', [ServiceController::class, 'service1'])->name('services.service-1');
Route::get('/services/system-administration', [ServiceController::class, 'service2'])->name('services.service-2');
Route::resource('/services', ServiceController::class)->only(['index']);
Route::resource('/clients', ClientController::class)->only(['index']);
Route::get('/blog/i-have-revamped-my-website', [BlogController::class, 'blog1'])->name('blog.blog-1');
Route::get('/blog/ultimate-web-development-guide-for-clients', [BlogController::class, 'blog2'])->name('blog.blog-2');
Route::get('/blog/understanding-http', [BlogController::class, 'blog3'])->name('blog.blog-3');
Route::get('/blog/playing-with-http-servers', [BlogController::class, 'blog4'])->name('blog.blog-4');
Route::get('/blog/shared-hosting-explained-for-clients', [BlogController::class, 'blog5'])->name('blog.blog-5');
Route::get('/blog/understanding-dns', [BlogController::class, 'blog6'])->name('blog.blog-6');
Route::get('/blog/playing-with-dns-clients', [BlogController::class, 'blog7'])->name('blog.blog-7');
Route::get('/blog/running-shell-commands-within-shared-hosting', [BlogController::class, 'blog8'])->name('blog.blog-8');
Route::get('/blog/how-poor-development-skills-break-internet', [BlogController::class, 'blog9'])->name('blog.blog-9');
Route::resource('/blog', BlogController::class)->only(['index']);
Route::resource('/contact', ContactController::class)->only(['index']);
