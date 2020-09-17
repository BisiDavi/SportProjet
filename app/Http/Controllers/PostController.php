<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('admin.post.createpost');
    }

    public function createpost()
    {
        $data = request()->validate([
            'title' => 'required',
            'post' => 'required'
        ]);

        Post::create($data);

        return redirect('create-post')->with('message', 'Post Created!');

    }
}
