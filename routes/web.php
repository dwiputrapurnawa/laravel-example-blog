<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get("/about", function () {
    return view("about", [
        "name" => "Ida Bagus Dwi Putra Purnawa",
        "email" => "putrapurnawa@gmail.com",
        "title" => "About"
    ]);
});




Route::get("/blog", [PostController::class, "index"]);
Route::get("/post/{post:slug}", [PostController::class, "show"]);

Route::get("/categories", [CategoryController::class, "categories"]);
Route::get("/categories/{category:slug}", [CategoryController::class, "category"]);

Route::get("/authors/{author:username}", function(User $author) {
    return view("posts", [
        "title" => "Post By Author: $author->name",
        "posts" => $author->posts->load("category", "author")
    ]);
});
