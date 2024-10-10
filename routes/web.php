<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Books;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
    
    Route::get('/authors', [AuthorsController::class, 'index'])->name('authors.index');
});

require __DIR__.'/auth.php';
