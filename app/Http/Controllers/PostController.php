<?php

namespace App\Http\Controllers;

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
        $data = request()->validate(

        );

        
    }
}
