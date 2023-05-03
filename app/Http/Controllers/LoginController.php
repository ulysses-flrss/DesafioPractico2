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
            return redirect()->route('category.index');
        } else {
            // $this->getClient($request);
            if ($this->getClient($request)) {
                $request->session()->regenerate();
                return dd('Cliente');
            }
            return back()->with('mensaje', 'Credenciales Incorrectas...');
        }

    }

    public function getClient(Request $request) {


        $rs = DB::table('clients')
            ->select('*')
            ->where([
                ['email', $request->input('email')],
                ['password', $request->input('password')]
            ])
            ->get();


            
            // return var_dump(count($rs));

        if (count($rs) > 0) {
            return true;
        } else {
            return false;
        }
        

        

        // return redirect()->route('login.client')->with('mensaje', 'Credenciales Incorrectas...');

    }
}
