<?php

namespace App\Http\Controllers;

use App\Events\NewValidatedPostEvent;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createpost()
    {
        $post =   Post::create($this->validateRequest());
        
        $this->storeImage($post);

        event(new NewValidatedPostEvent($post));

        return redirect('create-post')->with('message', 'Post Created!');

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


