<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['as' => 'stuff.', 'prefix' => 'stuff', 'namespace' => 'Stuff', 'middleware' => ['auth', 'stuff']], function () {
    Route::get('dashboard', [App\Http\Controllers\Stuff\DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
