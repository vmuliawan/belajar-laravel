<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{

    public function about()
    {
        return view('about', [
            "title" => "About",
            "nama" => "Vincent Muliawan",
            "email" => "vmuliawan29@gmail.com",
            "quotes" => "trying to do better"
        ]);
    }

    public function blog()
    {
        return view('posts', [
            "title" => "Blog",
            "content" => Post::latest()->get()
        ]);
    }

    public function details(Post $post)
    {
        return view('slug', [
            "title" => "Detail",
            "konten" => $post,
        ]);
    }
}
