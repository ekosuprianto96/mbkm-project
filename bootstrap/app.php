<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function() {
            Route::prefix('admin/')
                    ->name('admin.')
                    ->group(base_path('routes/admin.php'));

            Route::prefix('mitra/')
                    ->name('mitra.')
                    ->group(base_path('routes/mitra.php'));
        },
        web: __DIR__.'/../routes/web.php',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->priority([
            \Illuminate\Auth\Middleware\Authorize::class,
            App\Http\Middleware\RoleMiddleware::class
        ]);
        $middleware->alias([
            'role' => App\Http\Middleware\RoleMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
