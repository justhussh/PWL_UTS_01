<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BayiController;
use Illuminate\Http\Request;

Route::resource('Bayi', BayiController::class);

Route::get('search', [BayiController::class, 'search'])->name('search');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
