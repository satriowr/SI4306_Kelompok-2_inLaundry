<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use DB;
use App\Models\customerOrder;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showProduct = products::all();
        return view('Admin.product', compact('showProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = products::find($id);
        return view('Admin.update_product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,

        ];

        products::where('id', $id)
            ->update($data);

        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }

    public function dryclean()
    {
        return view('user.dryclean');
    }
    public function drycleanPost(Request $request)
    {
        //dd($request->all());
        DB::table('customer_orders')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'service' => $request->service,
            'weight' => $request->weight,
            'price' => $request->price,
        ]);

        return redirect('/dryclean/status');
    }

    public function drycleanStatus()
    {
        $product = products::where('id', '=', 1)->get();
        //dd($products);
        $status = customerOrder::all();
        return view('user_status.drycleanStatus', compact('status', 'product'));
    }

    public function drycleanStatusPost(Request $request){

        //dd($request->all());
        DB::table('customer_orders')->where('id', '=', 1)->update([
            'note' => $request->note
        ]);

        return redirect('/home');
    }

    public function bagwash()
    {
        return view('user.bagwash');
    }

    public function bagwashPost(Request $request)
    {
        //dd($request->all());
        DB::table('customer_orders')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'service' => $request->service,
            'weight' => $request->weight,
            'price' => $request->price,
        ]);

        return redirect('/bagwash/status');
    }

    public function bagwashStatus()
    {
        return view('user_status.bagwashStatus');
    }

    public function carpetwash()
    {
        return view('user.carpetwash');
    }

    public function carpetwashPost(Request $request)
    {
        //dd($request->all());
        DB::table('customer_orders')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'service' => $request->service,
            'weight' => $request->weight,
            'price' => $request->price,
        ]);

        return redirect('/carpetwash/status');
    }

    public function carpetwashStatus()
    {
        return view('user_status.carpetwashStatus');
    }

    public function dollwash()
    {
        return view('user.dollwash');
    }

    public function dollwashPost(Request $request)
    {
        //dd($request->all());
        DB::table('customer_orders')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'service' => $request->service,
            'weight' => $request->weight,
            'price' => $request->price,
        ]);

        return redirect('/dollwash/status');
    }

    public function dollwashStatus()
    {
        return view('user_status.dolltwashStatus');
    }

    public function fullwash()
    {
        return view('user.fullwash');
    }

    public function fullwashPost(Request $request)
    {
        //dd($request->all());
        DB::table('customer_orders')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'service' => $request->service,
            'weight' => $request->weight,
            'price' => $request->price,
        ]);

        return redirect('/fullwash/status');
    }

    public function fullwashStatus()
    {
        return view('user_status.fullwashStatus');
    }

    public function iron()
    {
        return view('user.iron');
    }

    public function ironPost(Request $request)
    {
        //dd($request->all());
        DB::table('customer_orders')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'service' => $request->service,
            'weight' => $request->weight,
            'price' => $request->price,
        ]);

        return redirect('/iron/status');
    }

    public function ironStatus()
    {
        return view('user_status.ironStatus');
    }

    public function shoeswash()
    {
        return view('user.shoeswash');
    }

    public function shoeswashPost(Request $request)
    {
        //dd($request->all());
        DB::table('customer_orders')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'service' => $request->service,
            'weight' => $request->weight,
            'price' => $request->price,
        ]);

        return redirect('/shoes/status');
    }

    public function shoeswashStatus()
    {
        return view('user_status.shoeswashStatus');
    }

    public function status(){
        $product = products::where('id', '=', 1)->get();
        $status = customerOrder::all();
        return view('user.status', compact('status', 'product'));
    }
}
