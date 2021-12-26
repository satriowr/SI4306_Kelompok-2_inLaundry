<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_order;

class admin_orderController extends Controller
{
    public function index(){
        $showOrder = admin_order::all();
        return view('Admin.order', compact('showOrder'));
    }

    public function update(){
        //
    }
}
