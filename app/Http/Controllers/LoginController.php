<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        
    }

    public function store(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
    

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //return dump(Auth::user());  
            return redirect()->route('category.index');
        } else {
            if (Auth::guard('client')->attempt($credentials)) {
                    if (Auth::guard('client')->attempt(['email' => $credentials['email'], 'password' => $credentials['password'], 'state' => 'enable'])) {
                    $request->session()->regenerate();
                    return redirect()->route('client.listar');
                } else {
                    return back()->with('mensaje', 'Usuario Deshabilitado...')->withInput();
                }
            } else {
                return back()->with('mensaje', 'Credenciales Incorrectas...')->withInput();
            }
            
            
        }


    }

    public function logout() {
        Auth::logout();
        Auth::guard('client')->logout();
        return redirect('login');
    }
}
