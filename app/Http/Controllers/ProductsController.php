<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use DB;

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

    public function dryclean(){
        return view('user.dryclean');
    }
    public function drycleanPost(Request $request){
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

    public function drycleanStatus(){
        return view('user_status.drycleanStatus');
    }
}
