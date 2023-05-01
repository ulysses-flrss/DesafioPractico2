<?php

namespace App\Http\Controllers;

use App\Models\Product; 
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =  Product::get();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> ['required'],
            'description'=> ['required'],
            'img'=> ['required'],
            'category'=> ['required'],
            'price'=> ['required'],
            'stock'=> ['required']
        ]);

        $product = new Product();
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->img = $request->input('img');
            $product->category = $request->input('category');
            $product->price = $request->input('price');
            $product->stock = $request->input('stock');
        $product->save();
        return to_route('product.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $edit_product = $product;
        $edit_product->name = $request->input('name');
        $edit_product->description = $request->input('description');
        $edit_product->img = $request->input('img');
        $edit_product->category = $request->input('category');
        $edit_product->price = $request->input('price');
        $edit_product->stock = $request->input('stock');
        $edit_product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
