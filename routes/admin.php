<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Modules\Admin\Auth\AuthenticateController;
use App\Http\Controllers\Modules\Admin\Dashboard\DashboardController;

Route::middleware(['web', 'guest'])->name('auth.')->group(function() {
    Route::get('login', [AuthenticateController::class, 'login'])->name('login');
    Route::post('check', [AuthenticateController::class, 'check'])->name('check');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['web', 'role:admin']);