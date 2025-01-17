<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        return view('books.index', [
            'books' => Book::all()
        ]);
    }
}
