<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

Route::resource('/', BaseController::class)->only(['index']);
