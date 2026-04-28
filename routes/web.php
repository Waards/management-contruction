<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\MaterialController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('projects', ProjectController::class)->except(['show']);
    Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

    Route::middleware('role:admin,hr')->group(function () {
        Route::resource('workers', WorkerController::class);
    });

    Route::middleware('role:admin,pm')->group(function () {
        Route::resource('expenses', ExpenseController::class);
        Route::resource('materials', MaterialController::class);
    });
});

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
