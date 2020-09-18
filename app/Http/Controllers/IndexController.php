<?php

namespace App\Http\Controllers;

use App\FooterContactform;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
     public function index()
    {
        return view('pages.home1');
    }

    public function footercontactform()
    {

        $data = request()->validate([
            'fullname' => 'required',
            'contact_email' => 'required|email',
            'message' => 'required'
        ]);

        FooterContactform::create($data);

        return redirect('gallery')->with('message', 'Thanks for contacting us.We shall get back to you shortly' );
    }
}
