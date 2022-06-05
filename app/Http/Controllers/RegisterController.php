<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registering(Request $request){
        $request->validate([
            'surname' => 'required',
            'othernames' => 'required',
            'email' => 'required|unique:users,email',
            'phone' => 'required|unique:users,phone|numeric|digits:11',
            'password' => 'required|confirmed',
        ]);

        $student = new User;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->surname = $request->surname;
        $student->othernames = $request->othernames;
        $student->is_admin = false;
        $student->password = Hash::make($request->password);
        $student->save();

        return redirect('/login')->with('msg','Account has been created Successfully');
    }
}
