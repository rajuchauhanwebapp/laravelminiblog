<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'home'])->name('home');


// Route::get('/post', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('post_index');
// Route::post('/post', [PostController::class, 'store'])->middleware(['auth', 'verified'])->name('post_create');
// Route::get('/dashboard', [DashboardController::class , 'show_post'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/post', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('post_index');
    Route::post('/post', [PostController::class, 'store'])->middleware(['auth', 'verified'])->name('post_create');
    Route::get('/dashboard', [DashboardController::class , 'show_post'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/post/edit/{id}', [PostController::class ,'edit'])->name('post_edit');
    Route::post('/post/edit/{id}', [PostController::class ,'update'])->name('post_update');
    Route::get('/post/delete/{id}', [PostController::class ,'destroy'])->name('post_delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
