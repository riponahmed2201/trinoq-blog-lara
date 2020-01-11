<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
