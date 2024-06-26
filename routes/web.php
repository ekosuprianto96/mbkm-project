<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Modules\Mitra\Auth\AuthenticateController;

Route::get('login', [AuthenticateController::class, 'login'])->name('login');
Route::view('/{any}', 'layouts.app')->where('any', '^(?!mitra|admin).*$');
