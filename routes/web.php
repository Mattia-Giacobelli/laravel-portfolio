<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\TypeController;
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

        //technologies routes
        Route::get('/Types', [TypeController::class, 'index'])->name('types');

        Route::get('/Types/{type}', [TypeController::class, 'show'])->name('type');

        Route::get('/Type/create', [TypeController::class, 'create'])->name('type.create');

        Route::post('/Type/store', [TypeController::class, 'store'])->name('type.store');

        Route::get('/Type/{type}/edit', [TypeController::class, 'edit'])->name('type.edit');

        Route::put('/Type/{type}/update', [TypeController::class, 'update'])->name('type.update');

        Route::delete('/Types/{type}', [TypeController::class, 'destroy'])->name('type.destroy');

        //Tecnologies routes
        Route::get('/technologies', [TechnologyController::class, 'index'])->name('technologies');

        Route::get('/technologies/{technology}', [TechnologyController::class, 'show'])->name('technology');

        Route::get('/technology/create', [TechnologyController::class, 'create'])->name('technology.create');

        Route::post('/technology/store', [TechnologyController::class, 'store'])->name('technology.store');

        Route::get('/technology/{technology}/edit', [TechnologyController::class, 'edit'])->name('technology.edit');

        Route::put('/technology/{technology}/update', [TechnologyController::class, 'update'])->name('technology.update');

        Route::delete('/technologies/{technology}', [TechnologyController::class, 'destroy'])->name('technology.destroy');
    });



require __DIR__ . '/auth.php';
