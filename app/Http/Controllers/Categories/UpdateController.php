<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class UpdateController extends Controller
{
    public function __invoke(Request $request, Category $category): View
    {
        $request->validate();

        $category->update($request->input('name'));

        return view('categories.index');
    }
}
