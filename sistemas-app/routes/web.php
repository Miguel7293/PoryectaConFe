<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\RoleController;






//no auth rOUTES
Route::get('/', [DashboardController::class, 'index']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
//auth Routes
    Route::get('/dashboard',[DashboardController::class, 'dashboard' ] )->name('dashboard');
    Route::resource('/categories',CategoryController::class);
    Route::resource('/lessons', LessonController::class);
    Route::resource('/roles',RoleController::class);
});
