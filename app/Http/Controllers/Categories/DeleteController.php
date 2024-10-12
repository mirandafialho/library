<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\View\View;

final class DeleteController extends Controller
{
    public function __invoke(Category $category): View
    {
        $category->delete();

        return view('categories.index');
    }
}
