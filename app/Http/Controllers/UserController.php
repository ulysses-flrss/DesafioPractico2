<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =  User::get();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');    
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
             'email'=> ['required'],
             'password'=> ['required'],
             'user_type'=> ['required'],
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->user_type = $request->input('user_type');
        $user->save();
        return to_route('users.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(User $product)
    {
        return view('user.edit', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $edit_user = $user;
        $edit_user->name = $request->input('name');
        $edit_user->last_name = $request->input('last_name');
        $edit_user->email = $request->input('email');
        $edit_user->password = $request->input('password');
        $edit_user->user_type = $request->input('user_type');
        $edit_user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
}
