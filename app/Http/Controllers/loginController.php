<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class loginController extends Controller
{
    public function index(){
        return view('Login.login');
    }

    public function validates(Request $request){
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            dd("login iso");
            //return redirect()->intended('/home');
        }
        
        return back()->with('loginError', 'Email atau Password Salah');

    }
}
