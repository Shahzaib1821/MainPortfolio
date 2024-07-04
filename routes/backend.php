<?php

use App\Http\Controllers\Backend\ProjectsController;
use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [BackendController::class, 'dashboard'])->name('dashboard');

    Route::prefix('projects')->group(function () {
        Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');
        Route::get('/create', [ProjectsController::class, 'create'])->name('projects.create');
        Route::post('/store', [ProjectsController::class,'store'])->name('projects.store');
        Route::get('/{id}/projects', [ProjectsController::class, 'edit'])->name('projects.edit');
        Route::put('/{id}', [ProjectsController::class, 'update'])->name('projects.update');
        Route::delete('/{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy');
    });
});
