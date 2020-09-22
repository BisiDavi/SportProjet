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
        $posts = new Post();
        return view('admin.page.post.create', compact('posts'));
    }


    public function store(Request $request)
    {
        request()->validate([
            'post_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $imageName = time(). '.' .$request->post_image->extension();
        $request->post_image->move(public_path('images'), $imageName);

        $post = Post::create($this->validateRequest());
        event(new NewValidatedPostEvent($post));

        return redirect('/post')->with('message', 'Post Created!');

    }

    public function show(Post $posts)
    {
        // $posts = Post::where('id', $post_id)->firstOrFail();
        return view('admin.page.post.show', compact('posts'));
    }

    public function edit(Post $posts)
    {
        $edit_posts = Post::all();

        return view('admin.page.post.edit', compact('posts','edit_posts'));
    }

    public function update(Post $posts)
    {
        $posts->update($this->validateRequest());
        return redirect('post/'. $posts->id);
    }

    public function destroy(Post $posts)
    {
        $posts->delete();
        return redirect('/post');
    }

    private function validateRequest()
    {
        $validatedData =  request()->validate([
            'title' => 'required',
            'post' => 'required',            
        ]);

        return $validatedData;
    }

    private function storeImage(Request $request)
    {
        if($request()->has('post_image')){
            $imageName = time(). '.' .$request->post_image->extension();
            $request->post_image->move(public_path('images'), $imageName);
            return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
        }
    }
}


