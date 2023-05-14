<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function categories() {
        return view("categories", [
            "title" => "Post Categories",
            "categories" => Category::all()
        ]);  
    }

    public function category(Category $category) {
        return view("posts", [
            "title" => "Post By Category: $category->name",
            "posts" => $category->posts->load("category", "author"),
        ]);
    }
}
