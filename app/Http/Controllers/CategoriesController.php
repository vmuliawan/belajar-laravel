<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

class CategoriesController extends Controller
{
    public function category()
    {
        return view('category', [
            "title" => "Categories",
            "content" => Category::all()
        ]);
    }

    public function categories(Category $category)
    {
        return view('posts', [
            "title" => $category->name,
            "content" => $category->posts->load('category', 'user'),
            "category" => $category->name,

        ]);
    }
}
