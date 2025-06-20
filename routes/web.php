<?php

use App\Http\Controllers\ClubStatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClubStatController::class, 'index'])->name('dashboard');
Route::get('/stats/{group}', [ClubStatController::class, 'filterByGroup']);
