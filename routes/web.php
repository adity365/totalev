<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class . '@index')->name('home');

Route::get('/terms', HomeController::class . '@terms')->name('terms');

Route::get('/privacy-policy', HomeController::class . '@privacyPolicy')->name('privacyPolicy');

// Admin Routes
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login']);
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/report-per-month', [DashboardController::class, 'reportPerMonth'])->name('admin.reportPerMonth');
});
