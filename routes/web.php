<?php

use App\Http\Controllers\ClubStatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClubStatController::class, 'landing'])->name('landing');
Route::get('/stats', [ClubStatController::class, 'index'])->name('dashboard.query');
Route::get('/stats/{group}', [ClubStatController::class, 'filterByGroup'])->name('dashboard');
