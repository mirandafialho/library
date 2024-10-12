<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(): View
    {
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }
}
