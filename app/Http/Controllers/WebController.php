<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Contact;

class WebController extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function about()
    {
        return view('layouts.pages.about');
    }

    public function showcontact()
    {
        return view('layouts.pages.contact');
    }

    public function insertContactData(Request $request)
    {
            $this->validate($request,[
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]);

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->message = $request->message;
            $contact->remember_token =  Str::random(60);

            $contact->save();

            return redirect()->back()->with('success','Succesfully Added Your information!');
    }
}
