<?php

namespace App\Http\Controllers;

use App\Admission;
use App\Mail\NewsletterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdmissionController extends Controller
{
    //
    public function index()
    {
        return view('pages.admission');
    }

    public function admissionform()
    {
        $data = request()->validate([
            'surname' => 'required',
            'other_name' => 'required',
            'email' => 'email|min:7',
            'phone_number' => 'required',
            'city' => 'required',
            'date_of_birth' => 'required',
            'home_address' => 'required',
            'name_of_school' => 'required',
            'qualification' => 'required',
        ]);
        

        Admission::create($data);

        // dd(request('email'));

        Mail::to("oludavidconnect@gmail.com")->send(new NewsletterMail($data));

        return redirect('admission')->with('message', 'Thanks for your application, We will be in touch.');
    }
}
