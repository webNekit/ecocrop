<?php

use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('page.home');
});

// Обычный пользователь role === 1
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Суперпользователь role === 2
Route::get('/dashboard-superuser', function () {
    return view('dashboard-superuser');
})->middleware(['auth', 'verified'])->name('dashboard-superuser');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
