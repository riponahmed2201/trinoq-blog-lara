<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
       return view('admin.dashboard');
   }

   public function add_category()
   {
       return view('admin.category.add_category');
   }

   public function manage_category()
   {
    return view('admin.category.manage_category');
  }

}
