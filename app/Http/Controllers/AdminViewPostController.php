<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class AdminViewPostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();

        return view('admin.page.viewposts', compact('posts'));
    }

}
