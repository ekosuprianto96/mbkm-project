<?php

use App\Http\Controllers\Modules\Mitra\Auth\AuthenticateController;
use App\Http\Controllers\Modules\Mitra\Dashboard\DashboardController;
use App\Http\Controllers\Modules\Mitra\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth/')->middleware(['web', 'guest'])->name('auth.')->group(function() {
    Route::post('check', [AuthenticateController::class, 'check'])->name('check');
});
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['web', 'role:mitra', 'auth']);
Route::get('profile', [ProfileController::class, 'index'])->name('profile')->middleware(['web', 'role:mitra', 'auth']);