<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/detail/{id}', [MainController::class, 'detail'])->name('detail');

Route::get('/dashboard', [BlogController::class, 'index'])->name('dashboard');
Route::get('/add-blog', [BlogController::class, 'create'])->name('add-blog');
Route::get('/add-slider', [BlogController::class, 'slider'])->name('add-slider');
Route::post('/new-slider', [BlogController::class, 'slider'])->name('add-slider');
Route::post('/create-blog', [BlogController::class, 'createBlog'])->name('create-blog');
Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage-blog');
Route::get('/edit-blog/{id}', [BlogController::class, 'editBlog'])->name('edit-blog');
Route::post('/update-blog/{id}', [BlogController::class, 'updateBlog'])->name('update-blog');
Route::get('/delete-blog/{id}', [BlogController::class, 'deleteBlog'])->name('delete-blog');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
