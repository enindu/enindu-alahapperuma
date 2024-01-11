<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    Route::resource('/', BaseController::class)->only(['index']);
    Route::resource('/contact', ContactController::class)->only(['index']);
    Route::get('/blog/the-story-of-enindu-com', [BlogController::class, 'theStoryOfEninduCom'])->name('blog.the-story-of-enindu-com');
    Route::get('/blog/dont-use-biometric-authentication', [BlogController::class, 'dontUseBiometricAuthentication'])->name('blog.dont-use-biometric-authentication');
    Route::get('/blog/decentralized-hacker-news', [BlogController::class, 'decentralizedHackerNews'])->name('blog.decentralized-hacker-news');
    Route::get('/blog/otp-less-payment-system', [BlogController::class, 'otpLessPaymentSystem'])->name('blog.otp-less-payment-system');
    Route::resource('/blog', BlogController::class)->only(['index']);
});
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::middleware('can:admin')->group(function () {
            //
        });
    });
});
