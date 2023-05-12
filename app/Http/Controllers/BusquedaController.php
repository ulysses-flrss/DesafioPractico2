<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusquedaController extends Controller
{
    public function buscar(Request $request){
        $termino = $request->input('termino');
        $resultados = DB::table('products')
        ->where('name', 'like', '%'.$termino.'%')
        ->get();

        return view('index', ['products'=> $resultados]);
    }
}
