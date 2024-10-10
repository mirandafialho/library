<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\View\View;

class ReadController extends Controller
{
    public function __invoke(Book $book): View
    {
        return view('books.read', [
            'book' => $book
        ]);
    }
}
