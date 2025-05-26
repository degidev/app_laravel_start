<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Componentes
    Route::get('/components/buttons', [AdminController::class, 'buttons'])->name('admin.components.buttons');
});
