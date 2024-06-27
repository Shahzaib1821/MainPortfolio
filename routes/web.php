<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontEndController::class, 'home'])->name('home');
Route::get('/about', [FrontEndController::class, 'about'])->name('about');
Route::get('/portfolio', [FrontEndController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [FrontEndController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
