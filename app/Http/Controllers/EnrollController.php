<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    //
    public function index()
    {
        //
        return view('pages.enroll');
    }

     public function subscribe()
    { 
       $data = request()->validate([
            'newsletter_email' => 'required|email|min:8'
        ]);

        Newsletter::create($data);
        
        return redirect('enroll')->with('message', 'Thanks for subscribing to our newsletter. Welcome on Board' );
    }
}
