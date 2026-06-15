<?php

use App\Http\Middleware\CheckQueryParameters;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/health',
    )->withMiddleware(function (Middleware $middleware) {
        $middleware->web(CheckQueryParameters::class);
    })->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
