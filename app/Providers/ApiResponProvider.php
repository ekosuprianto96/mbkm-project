<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ApiResponProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Response::macro('error', function ($status = false, $message = 'Terjadi kesalahan system', $statusCode = 500) {
            return response()->json([
                'status' => $status,
                'message' => $message
            ], $statusCode);
        });

        Response::macro('success', function ($status = false, $message = 'Terjadi kesalahan system', $data = null, $statusCode = 200) {
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data
            ], $statusCode);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
