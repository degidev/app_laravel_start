<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/', function () {
    return view('layouts.main-admin');
})->name('admin.dashboard');

Route::get('/web', function () {
    return view('layouts.main-web');
})->name('web.dashboard');

// Layouts routes
Route::get('/layouts/stacked', function () {
    return view('layouts.stacked');
})->name('layouts.stacked');

Route::get('/layouts/sidebar', function () {
    return view('layouts.sidebar');
})->name('layouts.sidebar');

// Incluyendo rutas de admin
require __DIR__.'/admin.php';




