<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

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
   
   public function save_category(Request $request)
   {
     $validate = $this->validate($request,[
        'category_name' => 'required'
       ]);

       $category = new Category;
       $category->category_name = $request->category_name;
       $category->save();
       
      return redirect()->back()->with('success','Category Succesfully Added!');
   }

   public function manage_category()
   {
    //  $categories = Category::all();
    $categories  = DB::select('select * from categories');
     return view('admin.category.manage_category', compact('categories'));
  }
public function edit_category($id)
{
  $category = DB::table('categories')->where('id',$id)->first();
  return view('admin.category.edit_category',compact('category'));
}

public function delete_category($id)
{
  $category = DB::table('categories')->where('id',$id)->delete();
  //$category->delete();
  return back();
}
}
