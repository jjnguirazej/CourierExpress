<?php

use App\Http\Controllers\Admin\BranchMasterController;
use App\Http\Controllers\Admin\CompanyMasterController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // ----- Company Master Routes ----- //
    Route::get('company-master', [CompanyMasterController::class, 'index'])->name('company-master.view');
    Route::post('company-master', [CompanyMasterController::class, 'store'])->name('company-master.store');
    Route::put('company-master', [CompanyMasterController::class, 'update'])->name('company-master.update');

    // ----- Branch Master Routes ----- //
    Route::get('branch-master/', [BranchMasterController::class, 'index'])->name('branch-master.index');
    Route::get('branch-master/create', [BranchMasterController::class, 'create'])->name('branch-master.create');
    Route::get('branch-master/{id}', [BranchMasterController::class, 'show'])->name('branch-master.show');
    Route::get('branch-master/{id}/edit/', [BranchMasterController::class, 'edit'])->name('branch-master.edit');
    Route::delete('branch-master/delete/{id}', [BranchMasterController::class, 'destroy'])->name('branch-master.destroy');

    // ----- Role Routes ----- //
    Route::get('roles/', [RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::get('roles/{id}/edit/', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('roles/{id}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('roles/delete/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
});

Route::group(['as' => 'stuff.', 'prefix' => 'stuff', 'namespace' => 'Stuff', 'middleware' => ['auth', 'stuff']], function () {
    Route::get('dashboard', [App\Http\Controllers\Stuff\DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
