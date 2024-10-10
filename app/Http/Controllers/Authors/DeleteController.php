<?php

namespace App\Http\Controllers\Authors;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\View\View;

final class DeleteController extends Controller
{
    public function __invoke(Author $author): View
    {
        $author->delete();

        return view('authors.index');
    }
}
