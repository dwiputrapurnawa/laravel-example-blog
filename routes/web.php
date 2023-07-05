<?php

use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\RegisterController;

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




Route::get("/posts", [PostController::class, "index"]);
Route::get("/post/{post:slug}", [PostController::class, "show"]);

Route::get("/categories", [CategoryController::class, "categories"]);
Route::get("/categories/{category:slug}", [CategoryController::class, "category"]);

Route::get("/login", [LoginController::class, "index"])->middleware("guest")->name("login");
Route::post("/login", [LoginController::class, "authenticate"]);

Route::post("/logout", [LoginController::class, "logout"]);

Route::get("/register", [RegisterController::class, "index"])->middleware("guest");
Route::post("/register", [RegisterController::class, "store"]);

Route::get("/dashboard", function() {
    return view("dashboard.index");
})->middleware("auth");

Route::get("/dashboard/posts/checkSlug", [DashboardPostController::class, "checkSlug"])->middleware("auth");

Route::resource("/dashboard/posts", DashboardPostController::class);

Route::resource("/dashboard/categories", AdminCategoryController::class)->except("show")->middleware("admin");


// Route::get("/authors/{author:username}", function(User $author) {
//     return view("posts", [
//         "title" => "Post By Author: $author->name",
//         "posts" => $author->posts->load("category", "author")
//     ]);
// });