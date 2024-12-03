<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Apps\AppsController as AppController;
use app\Http\Controllers\Apps\QrController as QrController;
Route::get('/', function () {
    return view('home');
});


Route::prefix('apps')->group(function () {
    Route::get('/', [QrController::class, 'index'])->name('app');
    Route::get('qr', [QrController::class, 'qr'])->name('app.qr');



    // Route::post('loginattempt', [AppsController::class, 'loginattempt'])->name('adminportal.loginattempt');
    // Route::get('createaccount', [AppsController::class, 'createaccount'])->name('adminportal.createaccount');
});