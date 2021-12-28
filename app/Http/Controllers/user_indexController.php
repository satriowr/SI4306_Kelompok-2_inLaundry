<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_indexController extends Controller
{
    public function index(){
        return view('User.index');
    }
}
