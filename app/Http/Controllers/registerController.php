<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    
    public function index(){
        return view('login.signup');
    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:8|max:255'
        ]);

        $data['password'] = bcrypt($data['password']);
        //dd('iso register');

        User::create($data);

        return view('login.login');

    }
}
