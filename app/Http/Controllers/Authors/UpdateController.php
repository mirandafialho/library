<?php

namespace App\Http\Controllers\Authors;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class UpdateController extends Controller
{
    public function __invoke(Request $request, Author $author): View
    {
        $request->validate();

        $author->update($request->all());

        return view('authors.index');
    }
}
