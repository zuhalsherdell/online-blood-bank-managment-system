<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\LoginController;

// middleware group under guest
Route::middleware(['guest'])->group(function(){
    
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
});

//meddleware group
Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

});



