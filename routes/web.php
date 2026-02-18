<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'verified')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {

        Route::get('/user', [UsersController::class, 'show'])->name('user');

        Route::get('/Projects', [ProjectController::class, 'index'])->name('projects');

        Route::get('/Projects/{id}', [ProjectController::class, 'show'])->name('project');

        Route::get('/Project/create', [ProjectController::class, 'create'])->name('project.create');

        Route::post('/Project/store', [ProjectController::class, 'store'])->name('project.store');

        Route::get('/Project/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');

        Route::put('/Project/{project}/update', [ProjectController::class, 'update'])->name('project.update');

        Route::delete('/Projects/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');
    });

require __DIR__ . '/auth.php';
