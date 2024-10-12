<?php

use App\Http\Controllers\Authors;
use App\Http\Controllers\Categories;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Books;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/books', Books\IndexController::class)->name('books.index');
    Route::get('/books/{book}', Books\ReadController::class)->name('books.read');
    Route::put('/books/{book}', Books\UpdateController::class)->name('books.update');
    Route::delete('/books/{book}', Books\DeleteController::class)->name('books.delete');
    
    Route::get('/authors', Authors\IndexController::class)->name('authors.index');
    Route::get('/authors/{author}', Authors\ReadController::class)->name('authors.read');
    Route::put('/authors/{author}', Authors\UpdateController::class)->name('authors.update');
    Route::delete('/authors/{author}', Authors\DeleteController::class)->name('authors.delete');

    Route::get('/categories', Categories\IndexController::class)->name('categories.index');
    Route::get('/categories/{category}', Categories\ReadController::class)->name('categories.read');
    Route::put('/categories/{category}', Categories\UpdateController::class)->name('categories.update');
    Route::delete('/categories/{category}', Categories\DeleteController::class)->name('categories.delete');
});

require __DIR__.'/auth.php';
