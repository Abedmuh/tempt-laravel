<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function login(Request $request) {
      return view('login.index');
    }
    
    public function register(Request $request) {
      return view('login.register');
    }
}