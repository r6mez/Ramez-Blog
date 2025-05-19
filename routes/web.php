<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

Route::get('/', [HomeController::class, 'get'])->name("home");

Route::get('/dashboard', [DashboardController::class, 'view'])->name("dashboard");
Route::patch('/dashboard', [OwnerController::class, 'update'])->name('owner.update');
Route::post('/dashboard', [SocialsController::class, 'add'])->name('social.add');
Route::delete('/dashboard/social/{id}', [SocialsController::class, 'destroy'])->name('social.delete');

Route::get('/about', [aboutController::class, 'view'])->name('about');

require __DIR__.'/auth.php';
