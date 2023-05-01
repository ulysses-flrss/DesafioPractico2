<?php

namespace App\Http\Controllers;

use App\Models\Sale; 
use Illuminate\Http\Request;

class SaleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales =  Sale::get();
        return view('sale.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sale.create');    
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
             'idProduct'=> ['required'],
             'quantity'=> ['required'],
             'saleDate'=> ['required'],
             'total'=> ['required']
        ]);

        $sale = new Sale();
         $sale->idProduct = $request->input('idProduct');
         $sale->quantity = $request->input('quantity');
         $sale->saleDate = $request->input('saleDate');
         $sale->total = $request->input('total');
        $sale->save();
        return to_route('sale.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        return view('sale.edit', $sale);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        $edit_sale = $sale;
        $edit_sale->idProduct = $request->input('idProduct');
        $edit_sale->quantity = $request->input('quantity');
        $edit_sale->saleDate = $request->input('saleDate');
        $edit_sale->total = $request->input('total');
        $edit_sale->save();
        return redirect()->route('sale.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
    }
}
