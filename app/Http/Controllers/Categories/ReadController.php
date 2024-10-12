<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\View\View;

final class ReadController extends Controller
{
    public function __invoke(Category $category): View
    {
        return view('categories.read', [
            'category' => $category
        ]);
    }
}
