<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('login');
// });

// Route::match(['get', 'post'], '/', function () {
//     return view('login');
// });


// Route::get('/login', function () {
//     return view('login');
// });

// routes/web.php
// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/branches', [DashboardController::class, 'index'])->name('branches.index');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/table/{table}', [DashboardController::class, 'showTable'])->name('showTable');
