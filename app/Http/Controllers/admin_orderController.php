<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\customerOrder;

class admin_orderController extends Controller
{
    public function index(){
        $this->autorize('admin');
        $showOrder = customerOrder::all();
        return view('Admin.order', compact('showOrder'));
    }

    public function update($id){
        $customer = DB::table('customer_orders')->where('id',$id)->get();
        //dd($dataBarang);
        return view('Admin.orderIndex', compact('customer'));
    }

    public function updatePost(Request $request){
        DB::table('customer_orders')->where('id',$request->id)->update([
            'status' => $request->status,
            'weight' => $request->weight,
            'nb' => $request->nb
        ]);

        return redirect('/admin/order');
    }

    public function delete($id){
        DB::table('customer_orders')->where('id',$id)->delete();
        $showOrder = customerOrder::all();
        return view('Admin.order', compact('showOrder'));
    }
}
