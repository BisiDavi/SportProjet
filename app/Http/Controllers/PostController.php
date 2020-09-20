<?php

namespace App\Http\Controllers;

use App\Events\NewValidatedPostEvent;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.page.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.page.post.create');
    }


    public function store()
    {
        $post =   Post::create($this->validateRequest());
        
        $this->storeImage($post);

        event(new NewValidatedPostEvent($post));

        return redirect('admin.page.post.create')->with('message', 'Post Created!');

    }

    public function show($title)
    {
        $post = Post::find($title);

        return view('admin.page.post.show', compact('post'));
    }

    private function validateRequest()
    {
        $validatedData =  request()->validate([
            'title' => 'required',
            'post' => 'required',
            'post_image' => 'required|file|image|max:5000'
        ]);

        return $validatedData;
    }

    private function storeImage($post)
    {
        if(request()->has('post_image')){
            $post-> update([
                'post_image' => request()->post_image->store('uploads', 'public')
            ]);
        }
    }
}


