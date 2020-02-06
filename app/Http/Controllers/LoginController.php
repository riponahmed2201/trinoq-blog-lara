<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }


    public function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('dashboard');
     }
     else
     {
        return back()->with('error', 'Wrong Email or Password');
     }
    }
    public function logout()
    {
     Auth::logout();
     return redirect('/login');
    }


}
