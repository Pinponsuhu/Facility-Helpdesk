<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function logining(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(!auth()->attempt($request->only('email','password'),$request->remember_me)){
            return back()->with('msg', 'invalid login credential');
        }else{
            if(auth()->user()->is_admin == false){
                return redirect('/dashboard');
            }else{
                return redirect('/admin/dashboard');
            }
        }
    }
}
