<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index(){
    return view('index');        
    }
    public function contact(){
        return view('contact');
    }
    public function facility(){
    return view('')  ;      
    }
}
