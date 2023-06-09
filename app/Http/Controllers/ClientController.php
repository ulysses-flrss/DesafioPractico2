<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients =  Client::get();
        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');    
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
            'last_name'=> ['required'],
            'email'=> ['required', 'email', 'unique:clients'],
            'password'=> ['required', 'confirmed']
        ]);

        $client = new Client();
        $client->name = $request->input('name');
        $client->last_name = $request->input('last_name');
        $client->email = $request->input('email');
        $client->password = Hash::make($request->input('password'));
        $client->state = $request->input('state');
        $client->save();
        return to_route('client.listar');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $edit_client = $client;
        $edit_client->name = $request->input('name');
        $edit_client->last_name = $request->input('last_name');
        $edit_client->email = $request->input('email');
        // $edit_client->password = $request->input('password');
        $edit_client->state = $request->input('state');
        $edit_client->save();
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
    }

    public function listarProductos(){
        $products = Product::get();

        return view('index', compact('products'));
    }

    public function carritoCompras() {
        return view('carrito');
    }
    
}
