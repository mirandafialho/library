<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Book $book): View
    {
        $request->validate();

        $book->update($request->all());

        return view('books.index');
    }
}
