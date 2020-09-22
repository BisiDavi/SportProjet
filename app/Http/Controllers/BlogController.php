<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function getblogpost()
    {
        $posts = Post::all();

        return view('pages.blog', compact('posts'));
    }

    public function post()
    {
        $posts = Post::all();
        return view('pages.blogpost', compact('posts'));
    }
}
