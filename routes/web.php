<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoriesController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', [PostController::class, 'about']);

Route::get('/blog', [PostController::class, 'blog']);

Route::get('/blog/{post:slug}', [PostController::class, 'details']);

Route::get('/category', [CategoriesController::class, 'category']);

Route::get('/categories/{category:slug}', [CategoriesController::class, 'categories']);

Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        "title" => "User Post",
        "content" => $author->post
    ]);
});
