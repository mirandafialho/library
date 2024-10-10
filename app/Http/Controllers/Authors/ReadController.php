<?php

namespace App\Http\Controllers\Authors;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\View\View;

final class ReadController extends Controller
{
    public function __invoke(Author $author): View
    {
        return view('authors.read', [
            'author' => $author
        ]);
    }
}
