<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    
   public function halamanlogin(){
    return view('login.login_form');
   }


   public function postlogin(Request $request){
    if(Auth::attempt($request->only('email','password'))){
        return redirect('/home');
    }
    return redirect('/');
   }


   public function logout( ){
    Auth::logout();
    return redirect ('/');
    
   } 

}
