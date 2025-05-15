<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/resources/{file}', [ function ($file) {
    $path = storage_path('resources/'.$file);
    if (file_exists($path)) {
        return response()->file($path);
    }
    abort(404);
}]);



require __DIR__.'/auth.php';
