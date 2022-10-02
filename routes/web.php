<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\LabTechnicianController;
use App\Models\labtechnicians;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;




// middleware group under guest
Route::middleware(['guest'])->group(function(){
    
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
   
});

//meddleware group
Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
    ROUte::get('/lab-technician', [LabTechnicianController::class, 'index'])->name('lab-technician');
    ROUte::post('/lab-technician/store', [LabTechnicianController::class, 'store'])->name('lab-technician.store');

});



