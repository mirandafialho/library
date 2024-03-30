<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\View\View;

class DeleteController extends Controller
{
    public function __invoke(Book $book): View
    {
        $book->delete();

        return view('books.index');
    }
}
